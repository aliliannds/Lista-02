
<html>
<head>
  <title> "Questão 11" </title>
</head>
  <body>
		<?php
//Exiba uma tabela com 10 linhas e 5 colunas

echo "<tabela=1>";
for($i = 1; $i <= 10; $i++){
	echo "<tr>";
	for($c = 1; $c <= 5; $c++){
		echo "<td> linha ".$i." - coluna ".$c."</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
