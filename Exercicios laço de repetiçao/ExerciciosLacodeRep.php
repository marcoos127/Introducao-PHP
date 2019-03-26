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
	$maior = 0;
		for ($id=0; $id < 10 ; $id++) { 
			if ($idade[$id] >= 18) {
				$maior++;
			}
		}
		echo "<br> $maior Pessoas são maiores de idade! <br>";

	//Exercicio 8
	echo "<b><br>EXERCICIO 8</b><br>";
	$g1=0;
	$g2=0;
	$g3=0;
	$g4=0;
	$g5=0;

	$idfe = array(12,10,16,19,20,25,13,65,70,82,55,40,35,50,14);

	for ($fe=0; $fe < 15 ; $fe++) { 
	if ($idfe[$fe] <= 15) {
		$g1++;
	}
	elseif ($idfe[$fe] >= 16 && $idfe[$fe] <= 30) {
		$g2++;
	}
	elseif ($idfe[$fe] >= 31 && $idfe[$fe] <= 45) {
		$g3++;
	}
	elseif ($idfe[$fe] >= 46 && $idfe[$fe] <= 60) {
		$g4++;
	}
	else{
		$g5++;
	}
}

	echo "<br>Idades até 15 anos: $g1";
	echo "<br>De 16 a 30 anos: $g2";
	echo "<br>De 31 a 45 anos: $g3";
	echo "<br>De 46 a 60 anos: $g4";
	echo "<br>Acima de 60 anos: $g5";
	echo "<br>Porcentagem de pessoas na primeira faixa etária: " . 100 * $g1 / 15;
	echo "<br>Porcentagem de pessoas na ultima faixa etária: " . 100 * $g5 / 15 . "<br>";

	//Exercicio 9
	echo "<b><br>EXERCICIO 9</b><br>";
	$tbd = 2;
	for ($tb=0; $tb <=10 ; $tb++) { 
		echo "<br> $tbd x $tb = " . $tbd * $tb;
	}
	//Exercicio 10
	echo "<br><b>O EXERCICIO 10 É A MESMA COISA QUE O 3</b><br>";
	//Exercicio 11
	echo "<br><b>EXERCICIO 11</b><br>";
	

	//Exercicio 12
	/*echo "<br><b>EXERCICIO 12</b><br>";

	$idPessoa = array(15,26,30,40,50,60,80,19,10,21,32,43,54,65,46,17,28,25,20,35,22,53,24,25,35);
	$altPessoa = array(1.70,1.80,2,1.30,1.40);
	$pesoPessoa = array(60,50,40,70,80,95,70,55,67,60,50,40,70,80,95,70,55,67,60,50,40,70,80,95,70);
	$id50 = 0;
	$id1020 = 0;
	for ($k=0; $k < 25; $k++) { 
		if ($idPessoa[$k] > 50) {
			$id50++;
		}
		elseif ($idPessoa[$k] >= 10 && $idPessoa[$k]<= 20) {
			$id1020++;
		}
	}
	for ($md=0; $md < 5; $md++) {
			$altPessoa[$md] += $altPessoa[$md]; 
			if ($md = 4) {
				echo "<br>" . $id1020 / $altPessoa[$md];
			}
	}
*/

	
?>