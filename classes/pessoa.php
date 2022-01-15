<?php

class Pessoa {

    private $nome;
    private $idade;
    private $sexo;
    private $estado;
    private $cidade;

    public function andar() {
        return $this->getNome() . " está andando";
    }

    public function correr() {

        $validacao = $this->validacao();

        if (!empty($validacao)) {
            return $validacao;
        }

        return $this->getNome() . " está correndo";
    }

    public function validacao() {
        $nome = $this->getNome(); 

        if(empty($nome)) {
            return "informe um nome de pessoa";
        }

        if (strtoupper($nome[0]) == "V") {
            return $nome . " não pode correr";
        }

        return "";
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}

$pessoa1 = new Pessoa();
$pessoa1->setNome("Vânia");
$pessoa1->setSexo("Feminino");
$pessoa1->setCidade("Rio de Janeiro");
$pessoa1->setEstado("RJ");

echo $pessoa1->getNome();
echo "<br />";
echo $pessoa1->getSexo();
echo "<br />";
echo $pessoa1->getCidade();
echo "<br />";
echo $pessoa1->getEstado();
echo "<br />";
echo $pessoa1->correr();

$pessoa2 = new Pessoa();
$pessoa2->setNome("");
$pessoa2->setSexo("Masculino");
$pessoa2->setCidade("Rio de Janeiro");
$pessoa2->setEstado("RJ");

echo $pessoa2->getNome();
echo "<br />";
echo $pessoa2->getSexo();
echo "<br />";
echo $pessoa2->getCidade();
echo "<br />";
echo $pessoa2->getEstado();
echo "<br />";
echo $pessoa2->correr();

?>