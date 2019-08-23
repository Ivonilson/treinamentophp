<?php  

function Fatorial($n){
	if($n == 1){
		return $n;
	} else {
		return $n * Fatorial($n - 1);
	}
}

echo Fatorial(5)."</br>";
echo Fatorial(7)."</br>";
echo Fatorial(1)."</br>";