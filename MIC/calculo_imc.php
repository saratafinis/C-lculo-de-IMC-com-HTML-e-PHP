<?php
$peso = $_POST ['peso'];
$altura = $_POST ['altura'];


$IMC = $peso / ($altura * $altura);

 $IMC = round($IMC, 2);

if ($IMC < 18.5) {
    echo "Abaixo do Peso normal ".$IMC;
}

elseif ($IMC > 25) {
    echo "Peso Normal".$IMC;
}

elseif ($IMC > 30) {
    echo "Excesso do peso".$IMC;
}

elseif ($IMC > 35) {
    echo "Obesidade Classe 1".$IMC;
}

elseif ($IMC > 40) {
    echo "Obesidade Classe 2".$IMC;
}

elseif ($IMC > 45) {
    echo "Obesidade Classe 3".$IMC;
}
?>