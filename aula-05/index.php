<?php
    /*
    TIPOS DE DADOS
    String, [palavras]
    Integer, [inteiro. qualquer numero nao decimal]
    Float, [numeros decimais]
    Boolean, [verdadeiro ou falso]
    Array, [matriz]
    Object, [objeto]
    NULL [nulo]
    */

    // String
    $exemplo1 = "Ola, mundo";

    // integer
    $exemplo2 = 345;
    $exemplo2 = -3;

    // Float
    $exemplo3 = 2.4;

    //Boolean
    $exemplo4 = true;
    $exemplo4 = false;

    //Array
    $exemplo5 = array("fusca", "brasilia");

    //Object
    class carro {
        public $cor;
        public $modelo;
        public function __construct($cor,$modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        public function mensagem() {
            return "O carro é $this->cor e o modelo $this->modelo";
        }
    }

    $carro1 = new carro("branco","fusca");

    echo $carro1->mensagem();
?>