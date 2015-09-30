<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Response to Ajax Notification request
     * 注意事项,回复消息,未完成任务
     * @return json
     */
    public function getNotice()
    {
        //asx:需要添加验证
        $arr = array(
            'notice' => array(
                array(
                    'icon' => 'icon-bolt',
                    'type' => 'info',
                    'content' => 'yiiiihahahahah',
                    'href' => '/aaa',//asx:可换成id拼接url
                    'time' => '22',
                ),
                array(
                    'icon' => 'icon-bolt',
                    'type' => 'info',
                    'content' => 'yiiiihahahahah',
                    'href' => '/bbb',
                    'time' => '22',
                ),
            ),
            'message' => array(
                array(
                    'href' => '/aa/ss',//asx:可换成id拼接url
                    'photo' => 'assets/admin/image/avatar2.jpg',//asx:头像单独放文件夹
                    'from' => 'Ian z',
                    'content' => 'hahah',
                    'time' => '32',
                ),
            ),
            'task'    => array(
                array(
                    'href' => '/sds',//asx:可换成id拼接url
                    'percent' => '60',
                    'content' => 'test task',
                ),
                array(
                    'href' => '/sds',
                    'percent' => '80',
                    'content' => 'tedsdsdt task',
                ),
            ),
        );

        return json_encode($arr);
    }


    /**
     * Response to Ajax Message request
     * 右下角弹出的消息框
     * @return json
     */
    public function getMessage()
    {
        //asx:需要添加验证
        //asx:配置文件中添加消息停留时间
        $arr = array(
            array(
            'title'  => 'lalla!',
            'text'   => 'Metronic allows you to easily customize the theme colors and layout settings.',
            'image'  => '',
//            'sticky' => '',
            'time'   => '3000',
            ),
            array(
                'title'  => 'hhoho',
                'text'   => 'Metronic allows you to easily customize the theme colors and layout settings.',
                'image'  => '',
//                'sticky' => '',
                'time'   => '3000',
            ),
            array(
                'title'  => 'hhoho',
                'text'   => 'Metronic allows you to easily customize the theme colors and layout settings.',
                'image'  => '',
//                'sticky' => '',
                'time'   => '3000',
            ),
            array(
                'title'  => 'hhoho',
                'text'   => 'Metronic allows you to easily customize the theme colors and layout settings.',
                'image'  => '',
//                'sticky' => '',
                'time'   => '3000',
            ),
            array(
                'title'  => 'hhoho',
                'text'   => 'Metronic allows you to easily customize the theme colors and layout settings.',
                'image'  => '',
//                'sticky' => '',
                'time'   => '3000',
            ),
            array(
                'title'  => 'hhoho',
                'text'   => 'Metronic allows you to easily customize the theme colors and layout settings.',
                'image'  => '',
                'sticky' => 'true',
                'time'   => '3000',
            ),
            array(
                'title'  => 'hhoho',
                'text'   => 'Metronic allows you to easily customize the theme colors and layout settings.',
                'image'  => '',
//                'sticky' => '',
                'time'   => '3000',
            ),
            array(
                'title'  => 'hhoho',
                'text'   => 'Metronic allows you to easily customize the theme colors and layout settings.',
                'image'  => '',
//                'sticky' => '',
                'time'   => '3000',
            ),
        );
        return json_encode($arr);
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
