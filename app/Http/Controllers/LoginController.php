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
            Mail::send('welcome', [], function ($message) {
                //asx:更改邮件内容
                $message->from(Config::get('mail.from')['address'], Config::get('mail.from')['name']);
                $message->subject('密码找回');
                $message->to('awesomechaos@qq.com');
            });
        } else {
            $msg = array('email' => 'Invalid Email');
            echo json_encode($msg);
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

        if ($result = $this->passwordReset->checkToken($request['token'])) {
            $email = $result['email'];
            $password = bcrypt($request['password']);
            $user = new User();
            if ($user->resetPassword($email, $password)) {
                echo '已成功重置';
            }
        }
        echo $request['token'];
        echo "yh";
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
