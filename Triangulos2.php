<?php
function angulo ($a,$b,$c) {
		$r='Acutangulo';
			if ($a==90 or $b==90 or $c==90) 
				$r='rectangulo';
			if ($a>90 or $b>90 or $c>90)
				$r='Obtusangulo';
			
		return $r;
}
echo angulo (30,60,90)."<br>";
echo angulo (60,60,60)."<br>";
echo angulo (100,20,40)."<br>";
