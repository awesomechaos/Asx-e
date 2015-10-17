<?php
/*
 * 后台管理的配置文件在此
 * created at 2015-10-09 15:10:25 by script
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
        'Layouts' => array(
                  'href' => 'javascript:void(0)',
                  'icon' => 'icon-home',
                  'controller' => '',
                  'id' => '2',
                  'subMenu' => array(
                              array(
                                  'href' => 'admin',
                                  'name' => 'Dad',
                                  'controller' => '',
                                  'id' => '5',
                              ),
                              array(
                                  'href' => 'admin',
                                  'name' => 'Dadsss',
                                  'controller' => '',
                                  'id' => '6',
                              ),
                   ),
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
        'default_admin_authority' => '1',
        'default_admin_menu' => 'all',
    ),
];