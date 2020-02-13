
<?php

$maximo = $_GET["maximo"];

$cont = 0; $soma = 0;
while($contador <= $maximo) {
	$soma += $cont;
	$cont++;
}
echo "Resultado: ".$soma;
?>
