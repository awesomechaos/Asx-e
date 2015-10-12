<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
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
    public function createToken($token)
    {
        $this->email = 'ha@qq.com';
        $this->token = $token;
        $this->created_at = Carbon::now();
        return $this->save();
    }
    /**
     * 查询token是否有效
     */
    public function checkToken($token)
    {
        return $this->where('token', $token)->where('created_at', '>', Carbon::now()->subHour())->orderBy('created_at', 'desc')->first();
    }
}
