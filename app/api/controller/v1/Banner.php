<?php
/**
 * Created by PhpStorm.
 * User: RS
 * Date: 2018/4/10
 * Time: 15:09
 */

namespace app\api\controller\v1;
use app\lib\exception\BaseException;

class Banner
{
    public function getBanner(){
//        throw new BaseException();

        throw new BaseException([
            'code' => 404,
            'msg' => '用户收获地址不存在',
            'errorCode' => 60001
        ]);


        $res = model('Banner')->select();
        var_dump(collection($res)->toArray());


    }




}