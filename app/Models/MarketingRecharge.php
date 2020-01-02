<?php
/*
 * @Author: 傍晚升起的太阳
 * @QQ: 1250201168
 * @Email: wuruiwm@qq.com
 * @Date: 2020-01-02 15:09:55
 * @LastEditors  : 傍晚升起的太阳
 * @LastEditTime : 2020-01-02 15:10:47
 */

namespace App\Models;

use Illuminate\Support\Facades\Cache;

class MarketingRecharge extends Base
{
    protected $table = 'marketing_recharge';//定义表名
    public static function list($number,$limit){
        $model = self::orderBy('id','asc');
        $count = $model->count();
        $data = $model->offset($number)
        ->limit($limit)
        ->get();
        return ['data'=>$data,'count'=>$count];
    }
}
