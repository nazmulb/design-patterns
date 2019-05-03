<?php
abstract class DBDriver
{
	abstract public function connect();
	abstract public function executeQuery($sql);
	abstract public function insertId();
	
	public function setHost($host)
	{
		//set db host 
	}
	
	public function setDB($db)
	{
		//set db name
	}
	
	public function setUserName($user)
	{
		//set user name
	}
	
	public function setPassword($pwd)
	{
		//set password
	}
}


class MySQLDriver extends DBDriver
{
	public $link;
	public function connect()
	{
		//implement own connection procedures
		//$this->link = mysql_connect();
	}
	public function executeQuery($sql)
	{
		//execute mysql query and return result
		//return mysql_query($sql);
	}
	public function insertId()
	{
		//find the latest inserted id
		//mysql_insert_id($this->link)
	}

}

class OracleDriver extends DBDriver
{
	public $link;
	public function connect()
	{
		//implement own connection procedures
		//$this->link = qracle_connect();
	}
	public function executeQuery($sql)
	{
		//execute mysql query and return result
		//return qocqal_query($sql);
	}
	public function insertId()
	{
		//find the latest inserted id
		//orcal_last_inserted_id($this->link)
	}
}

$driver = new OracleDriver();
$driver->setHost("localhost");
$driver->setDB("fn");
$driver->connect();
$res = $driver->executeQuery("SELECT * FROM user");
?>