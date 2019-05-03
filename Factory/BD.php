<?php
	class BD extends Country
	{
		function getPhoneCode()
		{
			return "+88";
		}
		
		function getCountryCode()
		{
			return "BD";
		}
		
		function getCountryName()
		{
			return "Bangladesh";
		}
		
		function show()
		{
			echo "OK";
		}
	}
?>