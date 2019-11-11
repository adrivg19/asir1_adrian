<?php
function longitud ($a,$b,$c) {
		$r='Escaleno';
			if ($a==$b || $b==$c or $a==$c) 
				$r='Isosceles';
			if ($b==$c and $a==$c)
				$r='Equilatero';
			
		return $r;
}
echo longitud(1,1,1)."<br>" 'Equilatero';
echo longitud(2,2,1)."<br>" 'Isosceles';
echo longitud(3,2,1)."<br>" 'Escaleno';
echo longitud(1,2,1)."<br>" 'Escaleno';
echo longitud(1,2,3)."<br>" 'Escaleno';
echo longitud(1,1,2)."<br>" 'Isosceles';
echo longitud(2,2,1)."<br>" 'Escaleno';