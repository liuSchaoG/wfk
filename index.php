<?php

/**
 * ****** 入口文件 ****** 
 * 1. 定义常量
 * 2. 加载函数库
 * 3. 启动框架     自动加载类等
 * 4.  
 */

define('WFK',realpath('./'));

define('CORE',WFK.'/core');

define('APP',WFK.'/app');

define('DEBUG',true);

define('MODULE','app');

/********* setup ********/
include "vendor/autoload.php";

if(DEBUG){
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	ini_set('display_errors','On');
}else{
	ini_set('display_errors','Off');
}

include CORE.'/common/function.php';

include CORE.'/wfk.php';

//new 一个类不存在时会触发这个方法
spl_autoload_register('\core\wfk::load');

\core\wfk::run();

// $arr = array(11,22,33,44,'rr');

//查看文件引入的php类
// dp(get_included_files());
