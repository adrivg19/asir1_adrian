<?php
$a = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];
function mes($n) {
	$a = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
	];
return $a[$n-1];
};
echo mes(1)."<br>";
echo mes(2)."<br>";
echo mes(4)."<br>";
echo mes(5)."<br>";

	
for($i=0;$i<12;$i++)
echo $a[$i]."<br>";
foreach($a as $mes)
echo($mes)."<br>";

	
