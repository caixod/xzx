<?php
namespace app\lib\exception;
use think\Exception;

/**
 * Class BaseException
 * 自定义异常类的基类
 */
use think\exception\Handle;
use app\lib\exception\CurrencyException;

class ExceptionHandler extends Handle
{

    public function render(Exception $e)
    {
        //自己抛出的自定义异常

        if ($e instanceof CurrencyException){

            $data['code'] = $e->code;
            $data['msg'] = $e->msg;
            !empty($data['errorCode'])?$data['errorCode'] = $e->$data['errorCode']:'';

        }else{
            //下面不是自定义异常，是服务器异常不是我们想要的，需要记录日志
            // 如果是服务器未处理的异常，将http状态码设置为500，并记录日志
            if(config('app_debug')){
                // 调试状态下需要显示TP默认的异常页面，因为TP的默认页面
                // 很容易看出问题
                return parent::render($e);//调回原来的render方法
            }else{
                //没开启调试模式的异常,一般是显示页面错误，不显示详细信息，api的话还是返回下面数据然后记录日志这样才合理
                $data['code'] = '500';
                $data['msg'] = '服务器内部错误';
            }

            Log::init([
                'type'  =>  'File',
                'path'  =>  LOG_PATH,
            ]);
            Log::record($e->getMessage());

//            $this->recordErrorLog($e);
        }

        return json($data);





    }


}





