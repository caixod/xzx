<?php
/**
 * Created by PhpStorm.
 * User: RS
 * Date: 2018/4/10
 * Time: 15:09
 */

namespace app\api\controller\v1;
use Think\Exception;

class Banner
{
    public function getBanner(){

        try{
                1 / 0;
        }catch (Exception $ex){

            throw $ex;

        }


//
//        $res = model('Banner')->select();
//        var_dump(collection($res)->toArray());


    }




}