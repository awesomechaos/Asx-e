<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Admin\User;
use Auth;
use Session;

class BaseController extends Controller
{

    /**
     * Menus authorized to use
     */
    protected $menus = [];

    public function __construct()
    {
//        Auth::attempt(['account' => $email, 'password' => $password]);
//        Auth::logout();
        $this->menus = $this->getMenus();
    }

    /**
     * Get authority menus
     *
     * @return array
     */
    public function getMenus()
    {
        $menus = array();
        $accountId = Auth::user()->id;
        $user = User::find($accountId);
        $authorityMenus = $user->getAuthorityMenus;
        $authMenus = explode(',', $authorityMenus->menuIds);
        if ($user->menu == 'all') {
            $menus = $authMenus;
        } else {
            $userMenus = explode(',', $user->menu);
            $menus = array_intersect($userMenus, $authMenus);
        }
        return $menus;
    }

    /**
     * Log out
     */
    public  function logout()
    {
        Auth::logout();
        Session::flush();
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
