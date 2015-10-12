<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Model\Admin\Password_reset;
use Mail;
use DB;
use Carbon\Carbon;
use Illuminate\Mail\Message;

class LoginController extends Controller
{
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
            'email' => 'required|email',
        ]);
        $token = str_random('200');
        $passwordReset = new Password_reset;
        $passwordReset->email = 'ha@qq.com';
        $passwordReset->token = $token;
        $passwordReset->save();

//        DB::table('password_resets')->insert(['email'=>'aa@qq.com','token' => $token,'created_at' => Carbon::now()]);
//        DB::table('users')->insert(['account'=>'aa@qq.com','email'=>'aa@qq.com','password'=>'$2y$10$BifbC4S0bk1qlWK8JnK6c.8.392vcs5SrbLBMm7NseqALQyCwDRqy','nickname' => 'ha','authority'=>'5','menu'=>'all','validationTime' => Carbon::now()]);
        //
        Mail::send('welcome', [], function ($message) {
            $message->from('379006571@qq.com', 'Laravel');

            $message->to('awesomechaos@qq.com');
        });

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
