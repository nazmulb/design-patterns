<?php
	function __autoload($className) 
	{
		require_once $className . '.php';
	}


	abstract class Country
	{
		abstract function getPhoneCode();
		abstract function getCountryCode();
		abstract function getCountryName();
		
		public static function create($country)
		{
			if(class_exists($country)) {	
				return new $country;
			} 
			else{
				throw new Exception ('Country not found');
			}
		}
	}
?>