<?php
function angulo ($a,$b,$c) {
		$r='Acutangulo';
			if ($a==90 or $b==90 or $c==90) 
				$r='rectangulo';
			if ($a>90 or $b>90 or $c>90)
				$r='Obtusangulo';
			
return $r; }
function longitud ($a,$b,$c) {
		$r='Escaleno';
			if ($a==$b || $b==$c or $a==$c) 
				$r='Isosceles';
			if ($b==$c and $a==$c)
				$r='Equilatero';
			
return $r; }
function tipo($a,$b,$c,$d,$e,$f) {
		return longitud($a,$b,$c).' y ' .angulo($d,$e,$f)};
		
echo tipo(1,1,sqrt(2),45,45,90).' - rectangulo e isosceles';
echo tipo(1,sqrt(2),1,45,90,45).' - rectangulo e isosceles';
echo tipo(sqrt(2),1,1,90,45,45).' rectangulo e isosceles';

echo '<br>';
echo tipo(1,1,1,60,60,60).' - rectangulo e acutangulo'."<br>";
echo tipo(4,2,3,95,40,45).' - rectangulo e obtusangulo'."<br>";

