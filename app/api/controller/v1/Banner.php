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
    public function getBanner($id){

        $BannerData = model('Banner')->getBannerById($id);
        if (!$BannerData){
            throw new CurrencyException('0','请求Banner不存在');
        }

//        $ceshi = $BannerData->toArray();
//        var_dump($ceshi);

        return $BannerData;


    }




}