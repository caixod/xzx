<?php
namespace app\lib\exception;
use think\Exception;

/**
 * Class BaseException
 * 自定义异常类的基类
 */
use think\exception\Handle;


class ExceptionHandler extends Handle
{
    //HTTP状态码
    private $code = '400';
    //错误具体信息
    private $msg = '参数错误';
    //自定义错误码
    private $errorCode = '10000';

    public function render(Exception $ex)
    {
        echo $ex->getMessage();

    }


}





