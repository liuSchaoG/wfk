<?php

namespace app\controller;

use \core\lib\model;
use Carbon\Carbon;
use \core\wfk;
use \app\model\userModel;
/**
* 主要控制器
*/
class indexController extends wfk
{
	
	function __construct()
	{
		// dp('indexController run!');
	}

	/**
	 * [index description] 留言板列表
	 * @author liuchao 2017-10-07T12:51:37+0800
	 * @return [type] [description]
	 */
	public function index()
	{
		// 测试模板变量输出
		$this -> assgin('data','index');
		$this -> display('index');
	}

	/**
	 * 添加留言
	 * @author liuchao 2017-10-29T19:09:56+0800
	 * @param  string $value [description]
	 */
	public function add($value='')
	{
		# code...
	}


	public function test($value='')
	{
		$this -> assgin('data','test');
		$this -> display('test');
	}



	// 调用模型类
	// $model = new userModel();

	// $ret = $model -> lists();
	// $ret = $model -> setOne(1,array('name'=>'liuchao'));


	// dump($ret);

	// $officialDate = Carbon::shouldOverflowMonths();

	// dump($officialDate);
	// dp($result -> select("users", "*"));
	// $ret  = new \core\lib\model();
	// $s = $ret -> query('select * from users');

	// dp($s->fetchAll());
	// $ret  = \core\lib\conf::get('ACTION','route');
	// dsp($ret);


}
