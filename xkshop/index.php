<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//定义模块地址
define('__CommonAdmin__','http://localhost/ecshop_flxk/xkshop/index.php/CommonAdmin/');
define('__Home__','http://localhost/ecshop_flxk/xkshop/index.php/');
define('__SuperAdmin__','http://localhost/ecshop_flxk/xkshop/index.php/SuperAdmin/');
//在调试 模式下不生成项目的核心缓存
define('NO_CACHE_RUNTIME',True);
// 定义ThinkPHP框架路径
define('THINK_PATH', 'ThinkPHP');
//定义项目名称和路径
define('APP_NAME', 'xkshop');
define('APP_PATH', '.');
// 加载框架公共入口文件
require(THINK_PATH."/ThinkPHP.php");
//实例化一个网站应用实例
App::run();
?>