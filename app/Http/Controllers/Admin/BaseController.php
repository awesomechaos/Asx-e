<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Admin\Authority_menu;
use App\Model\Admin\User;

class BaseController extends Controller
{

    /**
     * Menus authorized to use
     */
    protected $menus = [];

    public function __construct()
    {
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
        //asx:cookie获取accountid
        $accountId = 2;
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
