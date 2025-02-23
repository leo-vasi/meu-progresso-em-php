<?php

$dia = "quarta";

switch ($dia) {
    case "segunda":
        echo "Hoje é segunda-feira!";
        break;
    case "terça":
        echo "Hoje é terça-feira!";
        break;
    case "quarta":
        echo "Hoje é quarta-feira!";
        break;
    case "quinta":
        echo "Hoje é quinta-feira!";
        break;
    case "sexta":
        echo "Hoje é sexta-feira!";
        break;
    case "sábado":
    case "domingo":
        echo "É fim de semana!";
        break;
    default:
        echo "Dia inválido!";
}

?>