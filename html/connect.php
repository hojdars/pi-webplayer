<?php 
$connect = shell_exec("sudo /home/pi/webplayer/sh/connect.sh");
$c = substr($connect, 100, 21);
if ($c == "Connection successful\n") {
	print "$c";
}
else {
	print "$connect";
}
?>

