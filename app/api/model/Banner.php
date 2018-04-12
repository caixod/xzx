<?php
namespace app\api\model;
use app\api\model\Base;

class Banner extends Base
{

    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    public function getBannerById($id)
    {

        $BannerData = model('Banner')->with(['items','items.image'])->find($id);
        return $BannerData;

    }





}