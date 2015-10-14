<?php

namespace App\Http\Controllers;

use App\Model\Admin\User;
use App\Model\Admin\Password_reset;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
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

    public function __construct()
    {
        $this->passwordReset = new Password_reset;
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
    public function login(LoginRequest $request)
    {
        $input = $request->all();
        if (Auth::attempt(['account' => $input['username'], 'password' => $input['password']], isset($input['remember']) ? true : false)) {
           //login
           return redirect()->intended('admin');
        }
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
            Mail::send('admin.verify_reset_email', ['action' => '您正在重置密码：', 'url' => action('LoginController@resetPage', ['token' => $token])], function ($message) {
                $message->from(Config::get('mail.from')['address'], Config::get('mail.from')['name']);
                $message->subject('密码找回');
                $message->to('awesomechaos@qq.com');
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
            'password' => 'required|confirmed',
            'token' => 'required|min:200',
        ]);

        if (strlen($request['token']) != 200) {
            return abort(401);
        }

        if ($result = $this->passwordReset->getEmail($request['token'])) {
            $email = $result['email'];
            $password = bcrypt($request['password']);
            $user = new User();
            if ($user->resetPassword($email, $password)) {
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


}
