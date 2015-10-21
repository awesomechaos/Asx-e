<?php
/*
 * 后台管理的配置文件在此
 * created at 2015-10-21 14:10:00 by script
 */
return [
    'menu' => array(
        'Dashboard' => array(
                  'href' => 'javascript:void(0)',
                  'icon' => 'icon-home',
                  'controller' => '',
                  'id' => '1',
                  'subMenu' => array(),
        ),
        'UI Features' => array(
                  'href' => 'javascript:void(0)',
                  'icon' => 'icon-home',
                  'controller' => '',
                  'id' => '3',
                  'subMenu' => array(),
        ),
        'Form Stuff' => array(
                  'href' => 'javascript:void(0)',
                  'icon' => '',
                  'controller' => '',
                  'id' => '4',
                  'subMenu' => array(),
        ),
        'Setting' => array(
                  'href' => 'javascript:void(0)',
                  'icon' => 'icon-cogs',
                  'controller' => 'Setting',
                  'id' => '7',
                  'subMenu' => array(),
        ),
    ),
    'notification_type' => array(
        'warning' => 'warning',
        'alert' => 'important',
        'success' => 'success',
        'failure' => 'default',
        'normal' => 'info',
    ),
    'configs' => array(
        'notification_max_length' => '80',
        'message_show_time' => '3000',
    ),
];