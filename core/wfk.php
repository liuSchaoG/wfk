<?php

/**
 * wfk 基础类
 */

namespace core;


class wfk
{
	//预存已经加载的类，防止重复加载
	public static $classMap = [];
	public $assgin;
	public $name;
	static public function run()
	{
		$route = new \core\lib\route();

		$module = $route -> contro;
		$action = $route -> action;
		$module_path = APP.'/controller/'.$module.'Controller.php';
		$module_class = '\\'.MODULE.'\controller\\'.$module.'Controller';
		if(file_exists($module_path)){
			include $module_path;
			$obj = new $module_class();
			$obj -> $action();
		}else{
			throw new \Exception("找不到对应的控制器", 1);
		}
	}

	static public function load($class)
	{
		# 自动加载类库
		// dp('load ok');
		if(isset($classMap[$class])){
			return true;
		}else{
			$class = str_replace('\\', '/', $class);
			$file = WFK.'/'.$class.'.php';
			if(is_file($file)){
				include $file;
				self::$classMap[$class] = $class;
			}else{
				return false;
			}
		}
	}

	/**
	 * 变量委派
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function assgin($data,$value)
	{
		$this -> assgin[$data] = $value;
	}


	/**
	 * 模板输出
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function display($file='')
	{
		
		$class_name = $this -> getClassName();

		// $action_name = parent; //-> getActionName();
		// dump($action_name);die;
		if($file===''){
			$file = $action_name;
		}

		$path_file = APP.'/view/'.$class_name.'/'.$file.'.html';
		
		if(is_file($path_file)){

			// extract($this -> assgin);
			// include $file;
			

			//引入twig 模板引擎
			\Twig_Autoloader::register();
			$loader = new \Twig_Loader_Filesystem(APP.'/view/'.$class_name);
			$twig = new \Twig_Environment($loader, array(
			    // 'cache' => WFK.'/log',//打开会有缓存  不方便调试
			));
		
			$template = $twig->load($file.'.html');
			$template -> display($this -> assgin?$this -> assgin:'');
		}else{
			throw new \Exception('您指定的模板'.$file.'不存在', 1);
		}
	}


	/**
	 * 获取当前 class 名称
	 * @author liuchao 2017-10-16T21:44:59+0800
	 * @return [type] [description]
	 */
	protected function getClassName() 
	{
        // if(empty($this->name)) {
        //     // 获取Action名称
        //     $this->name     =   
        // }
        return substr(get_class($this),15,-10);
    }

    /**
     * 获取当前 action 名字
     * @author liuchao 2017-10-16T22:13:10+0800
     * @return [type] [description]
     */
    protected function getActionName()
    {
    	return get_class_methods($this);
    }

}








