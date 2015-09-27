<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdminUser;
use Cookie;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Requests\StoreAdminUserRequest $request)
    {
        //
        $arr = array(
            0 => array(
                'key' => 11,
                'map' => 22,
                'child' => array(
                    0 => array(
                        'key' => 12,
                        'map' => 23,
                        'child' => array()
                    )
                )
            ),
            1 => array(
                'key' => 21,
                'map' => 31,
                'child' => array()
            )

        );
//        $user = AdminUser::findOrFail(1);
//        return view('admin.b');
        return 'opps';
//        $tt = array( '1' , '2', '3');
//        return view('admin.index', compact('arr'));
    }
    public function i()
    {
        $head = array();
        $head['title'] = 'test';
        $head['isAdmin'] = true;
        $nav['pageName'] = 'Dashboard';
        $nav['subPage'] = '';
        $nav['description'] = '';
        if (!isset($_COOKIE['style_color'])) {
            $head['style_color'] = 'default';
        } else {
            $head['style_color'] = $_COOKIE['style_color'];
        }
        return view('admin.index', compact('head','nav'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}