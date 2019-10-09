<?php
function angulo ($a,$b,$c) {
		$r='Acutangulo';
			if ($a==90 or $b==90 or $c==90) 
				$r='rectangulo';
			if ($a>90 or $b>90 or $c>90)
				$r='Obtusangulo';
			
		return $r;
function longitud ($a,$b,$c) {
		$r='Escaleno';
			if ($a==$b || $b==$c or $a==$c) 
				$r='Isosceles';
			if ($b==$c and $a==$c)
				$r='Equilatero';
			
		return $r;
function tipo($a,$b,$c,$d,$e,$f) {
		return longitud($a,$b,$c).' y ' .angulo($d,$e,$f)
}
		
echo tipo(45,45,90,45,45,90);
echo '<br>';
echo tipo(1,1,1,60,60,60);."<br>";

