<?php

//QUESTÃO 8

    require __DIR__ . "/models/funcionario.php";
    require __DIR__ . "/models/data.php";

    $Bianca= new Funcionario();
    $Bianca->salario = 1500;
    $Bianca->departamento = "logistica";


    $data = new Data();
    $data->dia = 4;
    $data->mes = 4;
    $data->ano = 1989;

    //QUESTÃO 11

    $Bianca->informarDataEntrada($data);
    
    $Bianca->cpf= "555.444.777-89";

echo $Bianca->mostra();

    echo "<br>--------------------------------------------------------------<br>";

//    $Eliza= new Funcionario();
//    $Eliza->salario = 15500;
//    $Eliza->departamento = "empresaria";
//    $Eliza->dataEntrada = "02/11111/2015";
//    $Eliza->cpf= "565.884.723-54";
//
//echo $Eliza->mostra();