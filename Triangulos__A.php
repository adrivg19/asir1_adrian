<?php
function longitud ($a,$b,$c) {
		$r='Escaleno';
			if ($a==$b || $b==$c or $a==$c) 
				$r='Isosceles';
			if ($b==$c and $a==$c)
				$r='Equilatero';
			
		return $r;
}
echo longitud(1,1,1)."¿Equilatero?"."<br>";
echo longitud(2,2,1)."¿Isosceles?"."<br>";
echo longitud(3,2,1)."¿Escaleno?"."<br>";
echo longitud(1,2,1)."¿Isosceles?"."<br>";
echo longitud(1,2,3)."¿Escaleno?"."<br>";
echo longitud(1,1,2)."¿Isosceles?"."<br>";
echo longitud(2,2,1)."¿Isosceles?"."<br>";