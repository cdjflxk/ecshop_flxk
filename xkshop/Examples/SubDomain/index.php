<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2010 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 定义ThinkPHP框架路径
define('THINK_PATH', '../../ThinkPHP');
//定义项目名称和路径
define('APP_NAME', 'SubDomain');
define('APP_PATH', '.');
// 加载框架公共入口文件
require(THINK_PATH."/ThinkPHP.php");
//应用程序初始化
App::run();
?>