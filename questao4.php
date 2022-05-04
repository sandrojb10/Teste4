<?php

function sequenciaCrescente($array){
	if(sizeof($array) == 1 ){
		return "true";
	}
	for ($i=0; $i < sizeof($array); $i++) { 
		$crescente = true;
		$novoArray = $array;
		
		// Removendo um item do array e verificando se o resultado esta em ordem crescente
		array_splice($novoArray,$i, 1);

		// Aqui verificamos se está em ordem crescente
		for ($j=0; $j < sizeof($novoArray) -1; $j++) {
			if($novoArray[$j] >= $novoArray[$j+1]){
				$crescente = false;
			}
		}
		// Caso seja crescente retornamos True e encerramos a execução
		if($crescente){
			return "true";
		}
	}
	// Caso nao seja crescente retornamos falso
	return "false";
}


echo "[1, 3, 2, 1] " . sequenciaCrescente([1, 3, 2, 1]) . "<br>";
echo "[1, 3, 2] " . sequenciaCrescente([1, 3, 2]) . "<br>";
echo "[1, 2, 1, 2] " . sequenciaCrescente([1, 2, 1, 2]) . "<br>";
echo "[3, 6, 5, 8, 10, 20, 15] " . sequenciaCrescente([3, 6, 5, 8, 10, 20, 15]) . "<br>";
echo "[1, 1, 2, 3, 4, 4] " . sequenciaCrescente([1, 1, 2, 3, 4, 4]) . "<br>";
echo "[1, 4, 10, 4, 2] " . sequenciaCrescente([1, 4, 10, 4, 2]) . "<br>";
echo "[10, 1, 2, 3, 4, 5] " . sequenciaCrescente([10, 1, 2, 3, 4, 5]) . "<br>";
echo "[1, 1, 1, 2, 3] " . sequenciaCrescente([1, 1, 1, 2, 3]) . "<br>";
echo "[0, -2, 5, 6] " . sequenciaCrescente([0, -2, 5, 6]) . "<br>";
echo "[1, 2, 3, 4, 5, 3, 5, 6] " . sequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]) . "<br>";
echo "[40, 50, 60, 10, 20, 30] " . sequenciaCrescente([40, 50, 60, 10, 20, 30]) . "<br>";
echo "[1, 1] " . sequenciaCrescente([1, 1]) . "<br>";
echo "[1, 2, 5, 3, 5] " . sequenciaCrescente([1, 2, 5, 3, 5]) . "<br>";
echo "[1, 2, 5, 5, 5] " . sequenciaCrescente([1, 2, 5, 5, 5]) . "<br>";
echo "[10, 1, 2, 3, 4, 5, 6, 1] " . sequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]) . "<br>";
echo "[1, 2, 3, 4, 3, 6] " . sequenciaCrescente([1, 2, 3, 4, 3, 6]) . "<br>";
echo "[1, 2, 3, 4, 99, 5, 6] " . sequenciaCrescente([1, 2, 3, 4, 99, 5, 6]) . "<br>";
echo "[123, -17, -5, 1, 2, 3, 12, 43, 45] " . sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]) . "<br>";
echo "[3, 5, 67, 98, 3] " . sequenciaCrescente([3, 5, 67, 98, 3]);
    
?>