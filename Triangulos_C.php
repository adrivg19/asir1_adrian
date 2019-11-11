<?php
function angulo ($a,$b,$c) {
		$r='Acutangulo';
			if ($a==90 or $b==90 or $c==90) 
				$r='rectangulo';
			if ($a>90 or $b>90 or $c>90)
				$r='Obtusangulo';
			
		return $r;
}
echo angulo(60,30,90)."<br>";
echo angulo(60,60,60)."<br>";
echo angulo(40,20,100)."<br>";
