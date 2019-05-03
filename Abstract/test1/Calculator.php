<?php
abstract class Calculator
{
	protected $x;
	protected $y;
	
	public abstract function add();
	public abstract function sub();
	public abstract function power();
	
	public function setX($x)
	{
		$this->x = $x;
	}
	
	public function getX()
	{
		return $this->x;
	}
	
	public function setY($y)
	{
		$this->y = $y;
	}
	
	public function getY()
	{
		return $this->y;
	}

	public function mult()
	{
		return ($this->x*$this->y);
	}
}
?>