<p>Adrian</p>
<a href="http://192.168.0.99/asir1_mario/asir1_1.php">Mario Alonso</a>
<a href="http://192.168.0.90/asir1_pablo/asir1.php">Pablo Moreta</a>
<?php
$file = fopen("visitas.txt", "a");
fwrite($file, date('Y-m-d H:i '));
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f);
?>