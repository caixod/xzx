<?php
/**
 * Created by PhpStorm.
 * User: RS
 * Date: 2018/4/10
 * Time: 15:09
 */

namespace app\api\controller\v1;


class Banner
{
    public function getBanner(){

        $res = model('Banner')->select();
        var_dump($res);


    }




}