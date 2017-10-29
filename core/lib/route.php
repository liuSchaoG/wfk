<?php

namespace core\lib;
use \core\lib\conf;
/**
* 路由类
*/
class route 
{
	public $contro;
	public $action;

	
	/**
	 * 隐藏index.php
	 * 获取url 参数部分
	 * 返回对应控制器和方法
	 * @author liuchao 2017-10-29T18:56:17+0800
	 */
	function __construct()
	{
		if(isset($_SERVER['REQUEST_URI'])&&($_SERVER['REQUEST_URI']!='/')){

			$array = explode('/',trim($_SERVER['REQUEST_URI'],'/'));
			if(isset($array[0])){
				$this -> contro =$array[0];
				unset($array[0]);
			}
			if(isset($array[1])){
				$this -> action = $array[1];
			}else{
				$this -> action = conf::get('ACTION','route');
			}
			unset($array[1]);
			//url 多余的参数  用GET接收
			
			$count = count($array) + 2;
			$i = 2;
			while ($i <= $count) {
				if(isset($array[$i+1])){
					$_GET[$array[$i]] = $array[$i+1];
				}
				$i += 2;
			}
		}else{	
			$this -> contro = conf::get('CONTRO','route');
			$this -> action = conf::get('ACTION','route');
		}
		

	}




}