<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    public function getAuthorityMenus()
    {
        return  $this->hasOne('App\Model\Admin\Authority_menu', 'authority', 'authority');
    }
}
