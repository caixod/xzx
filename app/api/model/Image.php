<?php
namespace app\api\model;
use app\api\model\Base;

class Image extends Base
{
    protected $hidden = ['id','from','update_time','delete_time'];
    public function getUrlAttr($value)
    {
        $status = [$value=>'www.tp5.com/images'.$value];
        return $status[$value];
    }




}