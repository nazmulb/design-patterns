<?php
include_once("Calculator.php");

class ScientificCalculator extends StandardCalculator
{
	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	
	public function power()
	{
		return pow($this->x, $this->y);
	}
	
	public function mult()
	{
		return ($this->x + $this->y * 2);
	}
}
?>