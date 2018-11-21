<?php

//QUESTÃO 7

    class Funcionario
    {
        public $departamento;
        public $salario;
        private $dataEntrada;
        public $cpf;


      //QUESTÃO 12

        public function informarDataEntrada(Data $data){

            if ($data->dia > 31 || $data->mes > 12){
                echo "data incorreta";
            }else {
                $this->dataEntrada = $data;
            }
        }

        public function recebeAumento()
        {
            $aumento = $this->salario * 0.1;
            $this->salario = $this->salario + $aumento;
        }

        public function calculaGanhoAnual()
        {
            $ganhoAnual = $this->salario * 12;
            return $ganhoAnual;
        }

        //QUESTÃO 9

        public function mostra(){

            return "O funcionario do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->mostra()} possui salario de {$this->salario}.";

        }

        public function __toString()
        {
            return $this->mostra();


        }

    } //colocamos o teste mostrando a frase "o funcionario do departamento..." no arquivo teste_funcionario.php (questão 8)


