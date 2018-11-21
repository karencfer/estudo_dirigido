<?php

//QUESTÃO 10

    class Data
    {
        public $dia;
        public $mes;
        public $ano;

        public function mostra(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }

    }


//    $hoje = new Data();
//    $hoje->dia = "20";
//    $hoje->mes = "07";
//    $hoje->ano = "2017";
//    echo $hoje->mostra();

    //É importante usar uma classe nesse caso pois é mais fácil de impedir que o usuário insira datas falsas.
