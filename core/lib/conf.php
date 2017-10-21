<?php 

namespace core\lib;

/**
* 配置加载类
*/
class conf 
{
	static public $conf = array();
	static public function get($name,$file)
	{
		/**
		 * 1.判断配置文件存在否
		 * 2.判断配置存在否
		 * 3.判断缓存是否存在
		 */
		$path = WFK . '/core/config/' .$file. '.php';

		if(is_file($path)){
			
			if(isset($conf[$name])){
				return $conf[$name];
			}else{
				$conf = include $path;
				if(isset($conf[$name])){
					self::$conf = $conf;
					return $conf[$name];
				}else{
					throw new Exception("找不到您需要的配置".$name);
				}
				
			}
		}else{
			throw new Exception("配置文件不存在".$file);
		}

	}

	/**
	 * 获取配置文件
	 * @author liuchao 2017-10-07T14:51:30+0800
	 * @param  [type] $file [description]
	 * @return [type]       [description]
	 */
	static public function all($file)
	{
		$path = WFK . '/core/config/' .$file. '.php';

		if(is_file($path)){
			$conf = include $path;
			return $conf;
		}else{
			throw new Exception("配置文件不存在".$file);
		}
	}




}








 ?>