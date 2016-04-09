<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

//定义资源服务器的常量
define("SRC_URL", "http://www.testphp.com/day01/");

return array(
    'TMPL_PARSE_STRING' =>array(
        '__IMG__' =>SRC_URL.'/Public/'.MODULE_NAME.'/Images',
        '__CSS__' =>SRC_URL.'/Public/'.MODULE_NAME.'/Css',
        '__JS__' =>SRC_URL.'/Public/'.MODULE_NAME.'/Js'
    )
);


// 亲^_^ 后面不需要任何代码了 就是如此简单