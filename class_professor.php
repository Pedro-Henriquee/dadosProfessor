<?php

abstract class Professor {

    public $numMatricula;
    public $nome;
    public $cargaHoraria;
    public $salario;

    abstract function calculaSalario();
}

class ProfessorRegime extends Professor {

    public function __construct($numMatricula, $nome, $cargaHoraria, $salario) {
        $this->numMatricula = $numMatricula;
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
        $this->salario = $salario;
    }

    public function calculaSalario() {
        return "O salário do professor $this->nome, de matricula $this->numMatricula e carga horária $this->cargaHoraria, é de $this->salario";
    }

}

class ProfessorHorista extends Professor {

    public function __construct($numMatricula, $nome, $cargaHoraria, $salario) {
        $this->numMatricula = $numMatricula;
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
        $this->salario = $salario;
    }

    public function calculaSalario() {
        $this->salario = ($this->salario / $this->cargaHoraria);
        return "O salário do professor $this->nome, de matricula $this->numMatricula e carga horária $this->cargaHoraria, é de $this->salario";
    }
}
?>
