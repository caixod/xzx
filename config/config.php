<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 默认模块名
    'default_module'         => 'admin',
    // 默认控制器名
    'default_controller'     => 'Index',
    // 默认操作名
    'default_action'         => 'index',

    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => true,

    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '\app\lib\exception\ExceptionHandler',

];
