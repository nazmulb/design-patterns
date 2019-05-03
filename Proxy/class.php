<?php
include('IXR_Library.inc.php');
function gmtTime() 
{
	return gmdate("F, d Y H:i:s");
}

$server = new IXR_Server(array(
'time.getGMTTime' => 'gmtTime',
));	


$client = new IXR_Client('http://localhost/proxy/server.php');
if (!$client->query('time.getGMTTime'))
{
die('Something went wrong - '.$client->getErrorCode().' :
'.$client->getErrorMessage());
}
echo ($client->getResponse());
?>