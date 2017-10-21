<?php

namespace app\controller;

use \core\lib\model;
use Carbon\Carbon;
use \core\wfk;
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
	 * [index description]
	 * @author liuchao 2017-10-07T12:51:37+0800
	 * @return [type] [description]
	 */
	public function index()
	{
		// 调用模型类
		$result = new model();

		// $officialDate = Carbon::shouldOverflowMonths();

		// dump($officialDate);
		// dp($result -> select("users", "*"));
		// $ret  = new \core\lib\model();
		// $s = $ret -> query('select * from users');

		// dp($s->fetchAll());
		// $ret  = \core\lib\conf::get('ACTION','route');
		// dsp($ret);
		// 测试模板变量输出
		$this -> assgin('data','这是我委派的数据');
		$this -> display();

	}


	public function FunctionName($value='')
	{
		# code...
	}



}
