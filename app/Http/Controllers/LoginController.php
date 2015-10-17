<?php

namespace App\Http\Controllers;

use App\Model\Admin\User;
use App\Model\Admin\Password_reset;
use App\Model\Admin\Email_validation_change;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Auth;
use Config;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * @var Model Password_reset
     */
    protected $passwordReset;

    /**
     * @var Model User
     */
    protected $user;

    public function __construct()
    {
        $this->passwordReset = new Password_reset;
        $this->user = new User();
    }
    /**
     * Index login method with index view
     */
    public function index()
    {
        //
        view('index.login');
    }

    /**
     * Admin login method with admin view.
     */
    public function admin()
    {
        //
        $head['title'] = 'test';
        if (!isset($_COOKIE['style_color'])) {
            $head['style_color'] = 'default';
        } else {
            $head['style_color'] = $_COOKIE['style_color'];
        }
        return view('admin.login', compact('head'));
    }

    /**
     * login
     * @param LoginRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|exists:users,account|email|max:255',
            'password' => 'required|min:6'
        ]);
        if (!$this->user->checkValidation($request['username'])) {
            $url = action('LoginController@registerValidationEmail', ['username' => base64_encode($request['username'])]);
            return back()->withInput()->withErrors('账号未验证, 请先去邮箱验证账号')->with('validation', '<a href="'.$url.'">点击这里重新发送</a>');
        }
        if (Auth::attempt(['account' => $request['username'], 'password' => $request['password']], isset($request['remember']) ? true : false)) {
            //login
           return redirect()->intended('admin');
        } else {
            return back()->withInput()->withErrors('密码错误');
        }
    }

    /**
     * 重新发送验证邮件
     * @param Request $request
     */
    public function registerValidationEmail(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
        ]);
        $username = base64_decode($request['username']);
        $token = str_random('200');
        $validation = new Email_validation_change;
        $validation->createValidationToken($username, $token);
        Mail::send('admin.verify_reset_email', ['action' => '验证账号', 'url' => action('LoginController@registerValidation', ['token' => $token])], function ($message) use($username) {
            $message->from(Config::get('mail.from')['address'], Config::get('mail.from')['name']);
            $message->subject('新注册用户验证邮件');
            $message->to($username);
        });
        $validationEmail = true;
        $head['title'] = 'Login';
        if (!isset($_COOKIE['style_color'])) {
            $head['style_color'] = 'default';
        } else {
            $head['style_color'] = $_COOKIE['style_color'];
        }
        return view('admin.login', compact('validationEmail', 'head'));
    }

    /**
     * find password
     * @param Request $request
     */
    public function findPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
        ]);
        $token = str_random('200');
        if ($this->passwordReset->createToken($request['email'], $token)) {
            $email = $request['email'];
            Mail::send('admin.verify_reset_email', ['action' => '重置密码', 'url' => action('LoginController@resetPage', ['token' => $token])], function ($message) use ($email) {
                $message->from(Config::get('mail.from')['address'], Config::get('mail.from')['name']);
                $message->subject('密码找回');
                $message->to($email);
            });
        } else {
            $msg = array('email' => '该账号需要通过Email验证, 才能改密码');
            return response(json_encode($msg), $status = '422')
                ->header('Content-Type', 'application/json');
        }
    }


    /**
     *  show reset password page
     * @param Request $request
     * @return \Illuminate\View\View|void
     */
    public function resetPage(Request $request)
    {
        $this->validate($request, [
            'token' => 'required|min:200',
        ]);
        if (strlen($request['token']) != 200) {
            return abort(401);
        }
        if ($result = $this->passwordReset->checkToken($request['token'])) {
            $token = $request['token'];
            return view('admin.resetPassword',compact('token'));
        } else {
            $error = "密码重置已失效,请重新来过.<br/>5秒后自动跳转";
            $url = url('/admin/login');
            return view('error', compact('error', 'url'));
        }
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\View\View
     */
    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
            'token' => 'required|min:200',
        ]);

        if (strlen($request['token']) != 200) {
            return abort(401);
        }

        if ($result = $this->passwordReset->getEmail($request['token'])) {
            $email = $result['email'];
            $password = bcrypt($request['password']);
            if ($this->user->resetPassword($email, $password)) {
                $resetPassword = true;
                $head['title'] = 'Login';
                if (!isset($_COOKIE['style_color'])) {
                    $head['style_color'] = 'default';
                } else {
                    $head['style_color'] = $_COOKIE['style_color'];
                }
                $this->passwordReset->deleteToken($email);
                return view('admin.login', compact('resetPassword', 'head'));
            } else {
                return back()->withInput()->withErrors('重置密码错误, 请稍后再试');
            }
        }
    }

    /**
     * Register a new account.
     *
     * @param RegisterRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed'
        ]);
        if ($this->user->register($request['username'], bcrypt($request['password']))) {
            $validation = new Email_validation_change;
            $token = str_random('200');
            if ($validation->createValidationToken($request['username'], $token)) {
                $email = $request['username'];
                Mail::send('admin.verify_reset_email', ['action' => '验证账号', 'url' => action('LoginController@registerValidation', ['token' => $token])], function ($message) use($email) {
                    $message->from(Config::get('mail.from')['address'], Config::get('mail.from')['name']);
                    $message->subject('新注册用户验证邮件');
                    $message->to($email);
                });
                return json_encode(array("register" => true));
            } else {
                $this->user->rollbackRegister($request['username']);
            }
        }
        return json_encode(array("register" => false));
    }

    /**
     *
     */
    public function registerValidation(Request $request)
    {
        $this->validate($request, [
            'token' => 'required|min:200',
        ]);
        $validation = new Email_validation_change;
        if ($v = $validation->getUsername($request['token'])) {
            if ($this->user->setAccountValidated($v->username)) {
                $validated = true;
                $head['title'] = 'Login';
                if (!isset($_COOKIE['style_color'])) {
                    $head['style_color'] = 'default';
                } else {
                    $head['style_color'] = $_COOKIE['style_color'];
                }
                $validation->deleteToken($v->username);
                return view('admin.login', compact('validated', 'head'));
            }
        }
        $error = "账号验证失效,请重新来过.<br/>5秒后自动跳转";
        $url = url('/admin/login');
        return view('error', compact('error', 'url'));
    }

    /**
     * check email if exists
     * @param Request $request
     * @return bool
     * @internal param $email
     */
    public function checkRegisterEmail(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|email|max:255',
        ]);
        if ($this->user->checkRegisterEmail($request['username'])) {
            return json_encode(array('check' => true));
        }
        return json_encode(array('check' => false));

    }

}
