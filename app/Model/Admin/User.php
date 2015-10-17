<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Config;

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

    /**
     * create user
     * @param $email
     * @param $password
     * @return bool
     */
    public function register($email, $password)
    {
        if ($this->checkRegisterEmail($email)) {
            return false;
        }
        $this->account = $email;
        $this->email = $email;
        $this->password = $password;
        $this->authority = 0;
        $this->menu = Config::get('admin.configs')['default_admin_menu'];
        $this->nickname = substr($email, 0, strpos($email, '@'));
        return $this->save();
    }

    /**
     * rollback while registering and createtoken failed
     * @param $email
     * @return
     */
    public function rollbackRegister($email)
    {
        return $this->where('account', $email)->delete();
    }

    /**
     * check validation
     * @param $username
     * @return bool
     */
    public function checkValidation($username) {
        $user =  $this->select('authority')->where('account', $username)->first();
        if ($user->authority > 0) {
            return true;
        }
        return false;
    }

    /**
     * set account validated
     * @param $username
     * @return
     */
    public function setAccountValidated($username)
    {
        return $this->where('account', $username)->update(['validationTime' => Carbon::now(), 'authority' => Config::get('admin.configs')['default_admin_authority']]);
    }

    /**
     * check email if exists
     * @param $email
     * @return bool
     */
    public function checkRegisterEmail($email)
    {
        if ($this->where('account', $email)->first() || $this->where('email', $email)->first()) {
            return true;
        }
        return false;
    }

}
