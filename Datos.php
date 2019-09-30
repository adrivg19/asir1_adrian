<html>
<body>
Adrian <?php echo $_POST["nombre"]; ?><br>
Tu email es: <?php echo $_POST["email"]; ?>
<?php
$f=fopen('Suscriptores.txt','a');
fwrite($f,$_POST['email']."\r\n");
fclose($f)
?>
</body>
</html>