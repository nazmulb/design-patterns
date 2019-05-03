<?php
include_once("Calculator.php");

class StandardCalculator extends Calculator
{
	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	
	public function add()
	{
		return ($this->x + $this->y);
	}
	
	public function sub()
	{
		return ($this->x - $this->y);
	}
	
	public function power(){}
}
?>