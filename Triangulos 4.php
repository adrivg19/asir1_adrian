<?php
$a= [
	'lados'=>[1,1,1],
	'angulos'=>[60,60,60],
	];
	function longitud ($a,$b,$c) {
		$r='Escaleno';
			if ($a==$b || $b==$c or $a==$c) 
				$r='Isosceles';
			if ($b==$c and $a==$c)
				$r='Equilatero';
			
		return $r;
		function angulo ($a,$b,$c) {
		$r='Acutangulo';
			if ($a==90 or $b==90 or $c==90) 
				$r='rectangulo';
			if ($a>90 or $b>90 or $c>90)
				$r='Obtusangulo';

function c ($a) {
return lados	( $a['lados'][0],
					$a['lados'][1],
					$a['lados'][2]).' y '.
					angulos(
					$a['angulos'][0],
					$a['angulos'][1],
					$a['angulos'][2]
					);
					};
				
					
			
	