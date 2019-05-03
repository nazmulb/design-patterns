<?php
error_reporting(E_ALL);

interface DBDriver
{
	public function connect();
	public function execute($sql);
}

interface ReportGenerator
{
	public function showReport($reportArray);
}

abstract class ExceptionHandeler
{
	abstract public function throws($msg);
	
	public function show()
	{
		echo "NNN";
	}
}

class MySQLDriver extends ExceptionHandeler implements DBDriver, ReportGenerator
{
	public function throws($msg)
	{
		//TODO:
	}
	
	public function connect()
	{
		//TODO:
	}
	
	public function execute($sql)
	{
		//TODO:
	}
	
	public function showReport($reportArray)
	{
		//TODO:
	}	
	
	public function addmsg()
	{
		$this->show();
	}
	
}

class OracleDriver implements DBDriver
{
	public function connect()
	{
		//TODO:
	}
	
	public function execute($sql)
	{
		//TODO:
	}
}




?>
