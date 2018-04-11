<?php
/**
 * Created by PhpStorm.
 * User: RS
 * Date: 2018/4/10
 * Time: 15:09
 */

namespace app\api\controller\v1;
use app\lib\exception\CurrencyException;

class Banner
{
    public function getBanner(){
1/0;
        throw new CurrencyException('500');
        $res = model('Banner')->select();
        var_dump(collection($res)->toArray());


    }




}