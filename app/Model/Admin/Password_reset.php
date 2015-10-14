<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Admin\User;
use Carbon\Carbon;

class Password_reset extends Model
{

    protected $primaryKey = 'email';

    public $timestamps = false;
    //
    /**
     * 生成找回密码token，存数据库
     * @param $token
     * @return bool
     */
    public function createToken($email, $token)
    {
        $user = new User();
        if (!$user->checkNotLocked($email)) {
            return false;
        }
        $this->email = $email;
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
        return $this->where('token', $token)->where('created_at', '>', Carbon::now()->subHour())->orderBy('created_at', 'desc')->first();
    }


    /**
     * 根据token获取email
     * @param $token
     * @return
     */
    public function getEmail($token)
    {
        return $this->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->orderBy('created_at', 'desc')->first();
    }
}
