<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class User extends Model
{
    //

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getAuthorityMenus()
    {
        return  $this->hasOne('App\Model\Admin\Authority_menu', 'authority', 'authority');
    }

    /**
     * @param $email
     * @param $password
     * @return mixed
     */
    public function resetPassword($email, $password)
    {
        return $this->where('email', $email)->where('authority', '>', 0)->update(['password' => $password, 'remember_token' => '', 'updated_at' => Carbon::now()]);
    }

    /**
     * check whether is locked
     * authority: 0 - invalid, -1 - locked
     * @param $email
     * @return bool
     */
    public function checkNotLocked($email)
    {
        if ($user = $this->select('authority')->where('email', $email)->first()) {
            if ($user->authority > 0) {
                return true;
            }
        }
        return false;
    }

}
