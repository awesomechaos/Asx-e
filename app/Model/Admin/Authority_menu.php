<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Authority_menu extends Model
{
    //
    public function user()
    {
        return $this->hasMany('App\Model\Admin\User', 'authority', 'authority');
    }
}
