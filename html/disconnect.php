<?php 
$connect = shell_exec("sudo /home/pi/webplayer/sh/disconnect.sh");
$c = substr($connect, 111, 23);
if ($c == "Successful disconnected\n") {
	print "$c";
}
else {
	print "$connect";
}
?>

