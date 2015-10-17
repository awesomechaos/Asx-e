<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Email_validation_change extends Model
{
    protected $primaryKey = 'username';

    public $timestamps = false;

    /**
     * 生成找回密码token，存数据库
     * @param $username
     * @param $token
     * @return bool
     */
    public function createValidationToken($username, $token)
    {
        $this->deleteToken($username);
        $this->username = $username;
        $this->email = $username;
        $this->token = $token;
        $this->created_at = Carbon::now();
        return $this->save();
    }

    /**
     * 查询token是否有效
     * @param $token
     * @return
     */
    public function checkToken($token)
    {
        return $this->where('token', $token)->where('created_at', '>', Carbon::now()->subDay())->orderBy('created_at', 'desc')->first();
    }


    /**
     * 根据token获取username
     * @param $token
     * @return
     */
    public function getUsername($token)
    {
        return $this->where('token', $token)->where('created_at', '>', Carbon::now()->subDay())->orderBy('created_at', 'desc')->first();
    }

    /**
     * delete reset token
     */
    public function deleteToken($username)
    {
        return $this->where('username', $username)->delete();
    }
}
