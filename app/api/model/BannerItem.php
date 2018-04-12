<?php
namespace app\api\model;
use app\api\model\Base;

class BannerItem extends Base
{

    public function image()
    {
        return $this->belongsTo('Image','img_id','id');
    }



}