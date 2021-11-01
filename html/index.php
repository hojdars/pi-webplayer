<!DOCTYPE html>
<script language="JavaScript" type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>

<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title>Pi Music</title>
</head>

<body>
<div class="info">
<?php
$status = shell_exec('sudo /home/pi/webplayer/sh/status.sh 2>&1');
echo "<pre><h1>Mňůzik</h1>$status</pre>";

$battery = shell_exec('sudo /home/pi/webplayer/sh/battery.sh 2>&1');
echo "<pre><b>Battery:</b> $battery</pre>";

?>

<button type="button" id="connect">Connect</button>
<br>
<button type="button" id="disconnect">Disconnect</button>
<pre><p id="result"></p></pre>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#connect").click(function(){
            $.ajax({
                type: 'POST',
                url: 'connect.php',
                success: function(data) {
			if (data == "Connection successful\n") {
				$("#result").text(data);
				setTimeout(function(){ location.reload(); }, 3000);
			} else {
				$("#result").text(data);
			}
                }
	});
	});
	
        $("#disconnect").click(function(){
            $.ajax({
                type: 'POST',
                url: 'disconnect.php',
                success: function(data) {
			if (data == "Successful disconnected\n") {
				$("#result").text(data);
				location.reload();
			} else {
				$("#result").text(data);
			}
                }
         });
   	 });
});
</script>

<div class="player">
	<embed src="http://192.168.0.128:12345/" style="width:100%; height:100%">
</div>

</body>
</html>
