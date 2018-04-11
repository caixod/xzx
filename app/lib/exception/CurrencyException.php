<?php
/**
 * Created by PhpStorm.
 * User: RS
 * Date: 2018/4/11
 * Time: 10:20
 */

namespace app\lib\exception;
use think\Exception;


class CurrencyException extends Exception
{
    //HTTP状态码
    public $code;
    //错误具体信息
    public $msg;
    //自定义错误码
    public $errorCode;

    public function __construct($code = '',$msg = '默认错误',$errorCode = '')
    {
        $this->code = $code;
        $this->msg = $msg;
        $this->errorCode = $errorCode;
    }

}