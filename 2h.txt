<?php
function Notas($a){
	$r='Pendiente';
	if ($a>=5)
		$r= 'Aprobado';
	if ($a>=7)
		$r= 'Notable';
	if ($a>=8.5)
		$r= 'Sobresaliente';
	return $r;
}
echo Notas(1)."<br>";
echo Notas(5)."<br>";
echo Notas(8)."<br>";
echo Notas(4)."<br>";
echo Notas(10)."<br>";