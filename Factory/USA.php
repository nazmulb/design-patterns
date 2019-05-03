<?php
	class USA extends Country
	{
		function getPhoneCode()
		{
			return "+1";
		}
		
		function getCountryCode()
		{
			return "USA";
		}
		
		function getCountryName()
		{
			return "United States of America";
		}
	}
?>