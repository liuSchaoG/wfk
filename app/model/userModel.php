<?php 

namespace  app\model;

use core\lib\model;
/**
* user 用户模型
*/
class userModel extends model
{
	
	
	public $table = 'users';
	/**
	 * [lists description]
	 * @author liuchao 2017-10-29T15:34:22+0800
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function lists($value='')
	{
		$ret = $this->select($this->table,'*');
		return $ret;
	}

	/**
	 * [getOne description]
	 * @author liuchao 2017-10-29T15:34:28+0800
	 * @param  string $id [description]
	 * @return [type]     [description]
	 */
	public function getOne($id='')
	{
		$ret = $this -> get($this -> table,'*',array(
			'id' => $id
		));
		return $ret;
	}

	/**
	 * [setOne description]
	 * @author liuchao 2017-10-29T16:18:13+0800
	 * @param  [type] $id   [description]
	 * @param  [type] $data [description]
	 */
	public function setOne($id,$data)
	{
		$ret = $this -> update($this -> table,$data,array(
			'id' => $id
		));

		return $ret;
	}

	/**
	 * [delOne description]
	 * @author liuchao 2017-10-29T16:42:27+0800
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function delOne($id)
	{
		return $this -> delete($this -> table,array(
				'id' => $id
			   ));
	}


}







 ?>