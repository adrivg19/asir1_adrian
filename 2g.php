<?php
function Notas($a){
	if($a>5)
		$r= 'APTO';
	else 
		$r= 'NO APTO';
	return $r;
}
echo Notas(3)."<br>";
echo Notas(8)."<br>";