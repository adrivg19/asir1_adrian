<?php
	function meses($n) {
$a=[
	[ 
			'Mes'=>'Enero',
			'Dias'=>'31',
			'Estación'=>'Invierno'
		
	],
	[
		
		'Mes'=>'Febrero',
		'Dias'=>'29',
		'Estación'=>'Invierno',
		
	
	],
	[
		'Mes'=>'Marzo',
		'Dias'=>'30',
		'Estación'=>'Primavera',
		
	],
	[
		
		'Mes'=>'Abril',
		'Dias'=>'31',
		'Estación'=>'Primavera',
		
	],
	[ 
		'Mes'=>'Mayo',
		'Dias'=>'30',
		'Estación'=>'Primavera',
		
	],
	[
		'Mes'=>'Junio',
		'Dias'=>'31',
		'Estación'=>'Verano',
		
	],
	[
		'Mes'=>'Julio',
		'Dias'=>'30',
		'Estación'=>'Verano',
	],
	[
		'Mes'=>'Agosto',
		'Dias'=>'31',
		'Estación'=>'Verano',
	],
	[
		 'Mes'=>'Septiembre',
		'Dias'=>'30',
		'Estación'=>'Otoño',
		
	],
	[
		'Mes'=>'Octubre',
		'Dias'=>'31',
		'Estación'=>'Otoño',
	],
	[
		'Mes'=>'Noviembre',
		'Dias'=>'30',
		'Estación'=>'Otoño',
	],
	[
		'Mes'=>'Diciembre',
		'Dias'=>'31',
		'Estación'=>'Invierno',
	],
];
$r=null;
$r=$r.$a[$n-1]['Mes']."<br>";
$r=$r.$a[$n-1]['Dias']."<br>";
$r=$r.$a[$n-1]['Estación']."<br>";
return $r;
}
echo meses(12)."¿Octubre?"."<br>";
echo meses(6)."Junio"."<br>";
echo meses(1)."¿Enero?"."<br>";





	

