<?php
interface Notifier
{
	public function notify();
}

class EmailNotifier implements Notifier
{
	public function notify()
	{
		//do something to notify the user by Email
		echo "Send Email Successfully!";
	}
}

class FaxNotifier implements Notifier
{
	public function notify()
	{
		//do something to notify the user by Fax
		echo "Send Fax Successfully!";
	}
}

class SMSNotifier implements Notifier
{
	public function notify()
	{
		//do something to notify the user by SMS
		echo "Send SMS Successfully!";
	}
}

class User
{
	public function getNotifier()
	{
		return array("sms", "email");
	}
}


/**
* Let's create a mock (model) object User which we assume has a method named
* getNotifier(). This method returns either "sms" or "fax" or "email"
*/
$user = new User();
$notifier = $user->getNotifier();

switch ($notifier)
{
	case "email":
		$objNotifier = new EmailNotifier();
	break;
	case "sms":
		$objNotifier = new SMSNotifier();
	break;
	case "fax":
		$objNotifier = new FaxNotifier();
	break;
}

$objNotifier->notify();
?>