<?php
define ('APP_NAME','App');//定义thinkphp项目的名称
define ('APP_PATH','./App/');//定义thinkphp项目的路径
define ('UPLOAD_PATH','./Uploads/');
define ('APP_DEBUG',true);//开启调试模式
require APP_PATH."/Conf/app_debug.php";
require 'Base/ThinkPHP.php';