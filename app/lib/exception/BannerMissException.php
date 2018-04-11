<?php
/**
 * Created by PhpStorm.
 * User: RS
 * Date: 2018/4/11
 * Time: 10:22
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;

class BannerMissException extends BaseException
{
    public $code = '404';
    public $msg = '请求banner不存在';
    public $code = '30000';
}