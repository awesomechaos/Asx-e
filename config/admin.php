<?php
/*
 * 后台管理的配置文件在此
 */

return [
    'menu' => array(
        'Dashboard' => array(
            'href' => 'javascript:void(0)',
            'icon' => 'icon-home',
            'controller' => 'Admin',
            'subMenu' => array(),
        ),
        'Layouts' => array(
            'href' => 'javascript:void(0)',
            'icon' => 'icon-home',
            'controller' => '',
            'subMenu' => array(
                array(
                    'href' => 'admin',
                    'name' => 'Dad',
                    'controller' => '',
                ),
                array(
                    'href' => 'admin',
                    'name' => 'Dadsss',
                    'controller' => 's',
                ),
            ),
        ),
        'UI Features' => array(
            'href' => 'javascript:void(0)',
            'icon' => 'icon-home',
            'controller' => '',
            'subMenu' => array(),
        ),
        'Form Stuff' => array(
            'href' => 'javascript:void(0)',
            'icon' => '',
            'controller' => '',
            'subMenu' => array(),
        ),
    ),
    'notification_type' => array(
        'warning' => 'warning',
        'alert'   => 'important',
        'normal'  => 'info',
        'failure' => 'default',
        'success' => 'success',
    ),
]
?>