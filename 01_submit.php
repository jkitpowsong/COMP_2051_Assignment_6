<?php

// processing data on server 
//thanks : http://www.w3resource.com/ajax/using-XML.php
/*if (isset($post['name'],$post['email'],$post['message'])) 
{
	print_r($post)
}
*/

//collect data send as XML
$xml = file_get_contents('php;//input');

//open a file handler with read and write permission
$fh = fopen('invalid.xml','r+');

fwrite($fh,$xml);

//closing the file handler
fclose($fh);
?>
