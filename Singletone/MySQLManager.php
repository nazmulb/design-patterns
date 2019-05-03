<?php
class MySQLManager
{
	private static $instance;
	
	public function __construct()
	{
		if (!self::$instance){
			self::$instance = $this;
			echo "New Instance <br />";
			
			return self::$instance;
		}else{
			echo "Old Instance <br />";
			
			return self::$instance;
		}
	}
	
	//keep other methods same
}
?>