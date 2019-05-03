<?php
interface observer
{
	public function notify();
}

class YMNotifier implements observer
{
	public function notify()
	{
		//send alerts using YM
		echo "Notifying via YM<br>";
	}
}

class EmailNotifier implements observer
{
	public function notify()
	{
		//send alerts using Email
		echo "Notifying via Email<br>";
	}

}

class Observable
{
	private $observers = array();
	
	public function register($object)
	{
		if ($object instanceof observer)
			$this->observers[] = $object;
		else
			echo "The object must implement observer interface<br>";
	}	
	
	public function stateChange()
	{
		foreach ($this->observers as $observer)
		{
			$observer->notify();
		}
	}
}

class User
{
	public function notify()
	{
		//send alerts using User
		echo "Notifying via User<br>";
	}
}

$postmonitor = new Observable();
$ym = new YMNotifier();
$em = new EmailNotifier();
$s = new stdClass();
$u = new User();
$postmonitor->register($ym);
$postmonitor->register($em);
$postmonitor->register($s);
$postmonitor->register($u);
$postmonitor->stateChange();	
?>