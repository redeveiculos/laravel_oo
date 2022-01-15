<?php

class Pessoa {

    public $nome;
    public $idade;

    public function andar() {
        return $this->nome . " está andando";
    }

    public function correr() {
        $this->validacao();
        return $this->nome . " está correndo";
    }

    public function validacao() {
        if(empty($this->nome)) {
            die("informe um nome de pessoa");
        } else {
            echo "validando o nome " . $this->nome;
            echo "<br />";
        }

        if (strtoupper($this->nome[0]) == "V") {
            die($this->nome . " não pode correr");
        }
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Vânia";
$pessoa1->correr();

?>