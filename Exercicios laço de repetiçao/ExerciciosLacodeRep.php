<?php
	//Exercicio 1
	echo "<b>EXERCICIO 1</b>";
	$a = 1000;
	$b = 2000;
	while ($a <= $b) {
		$a++;
		if ($a % 11 == 5) {
			echo "<br><b>$a</b> é divisivel por 11 e produz resto igual a 5.";
		}
}
	//Exercicio 2
	echo "<br><b>EXERCICIO 2</b><br>";
	for ($n=1; $n <=5 ; $n++) { 
		$s = 1;
		echo "<br>" . $s + 1/$n . "<br>";
	}

	//Exercicio 3
	echo "<b>EXERCICIO 3</b>";
	for ($t=1; $t <=10 ; $t++) { 
			for ($i=0; $i <=10 ; $i++) { 
				echo "<br>$t x $i = " . $t * $i;
			}
	}

	//Exercicio 4


	//Exercicio 5
	echo "<b><br>EXERCICIO 5</b><br>";
	$clienteNome = array("Carlos","Marcos","Lucas","Rosana","Marcela","Jhony","Pedro","Patricia","Ana","Gabriel","Edson","Celso","Gustavo","Vivian","Guilherme" );
	$clienteCompra = array(900,1200,1300,500,800,600,1700,1800,1900,100,1100,500,1300,1400,500);

	for ($y=0; $y < 15 ; $y++) { 
					if ($clienteCompra[$y] <= 1000) {
					$bonus = $clienteCompra[$y]  + ($clienteCompra[$y] * 0.10);
						echo "<br>" . $clienteNome[$y] . " teve a compra do ano passado com o valor menor que 1000R$ e teve 10% de bônus, sendo assim o valor: $bonus <br>";

					}
					else{
					$bonus = $clienteCompra[$y]  + ($clienteCompra[$y] * 0.15);
						echo "<br>"  . $clienteNome[$y] . " teve a compra do ano passado com o valor maior que 1000R$ e teve 15% de bônus, sendo assim o valor: $bonus <br>";
					}
			}
	//Exercicio 6
	echo "<b><br>EXERCICIO 6</b><br>";
	//Ingresso a 5 reais vendem 120 ingressos, a cada 50cents a menos vendem mais 26 ingressos.
	$venda = 120;
	$p = 5;
	while ($p >= 1) { 
		$venda+=26;
		echo "<br>Os ingresso vendidos a $p Reais, venderam-se $venda ingressos gerando renda de: " . $venda * $p . " Reais";
		$p -= 0.50;
	}
	//Exercicio 7
	echo "<b><br>EXERCICIO 7</b><br>";	
	$idade = array(18,15,16,19,20,26,30,12,14,23);

		for ($id=0; $id < 10 ; $id++) { 
			if ($idade[$id] > 18) {
				echo "<br>Maior de idade!";
			}
		}

?>