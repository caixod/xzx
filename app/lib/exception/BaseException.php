<?php
namespace app\lib\exception;
use think\Exception;

/**
 * Class BaseException
 * 自定义异常类的基类
 */
use think\exception\Handle;
class BaseException extends Handle
{
    public $code = 400;
    public $msg = 'invalid parameters';
    public $errorCode = 999;

    public $shouldToClient = true;

    public function render(Exception $e)
    {

    }
}

