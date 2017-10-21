<?php 

namespace core\lib;

use \core\lib\conf;


/**
* 模型类 继承medoo 轻量级数据库框架 如下写法
*/
class model extends \Medoo\Medoo
{
	
	public function __construct()
	{
		
		$conf = conf::all('database');

		parent::__construct($conf);
			
	}
}


/**
* 模型类 继承pdo时如是写法  
*/
// class model extends \PDO
// {
	
// 	public function __construct()
// 	{
// 		// $dsn = 'mysql:host = localhost;dbname=sas';
// 		// $username = 'root';
// 		// $passwd = '123456';
// 		$conf = conf::all('database');

// 		try {
// 			parent::__construct($conf['DSN'],$conf['USERNAME'],$conf['PASSWD']);
			
// 		} catch (Exception $e) {
// 			dp($e -> getMessage());
// 		}

// 	}
// }






