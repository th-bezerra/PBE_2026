<?php
class Funcionario{
    private $nome;
    private $cargo;
    private $horasExtras;
    private $valeTransporte;
    private $salarioBase;

    public function __construct($nome, $cargo, $horasExtras, $valeTransporte, $salarioBase){
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->horasExtras = $horasExtras;
        $this->valeTransporte = $valeTransporte;
        $this->salarioBase = $salarioBase;
    }
    public function definirSalarioBase($salarioBase){
        if($this->$cargo == "Auiliar"){
            $this->salarioBase = 2200;
        }
        elseif($this->$cargo == "Tecnico"){
            $this->salarioBase = 3520;
        }
        else{
            $this->salarioBase = 5500;
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function getHorasExtras(){
        return $this->horasExtras;
    }
    public function getValeTransporte(){
        return $this->valeTransporte;
    }
    public function getSalarioBase(){
        return $this->salarioBase;
    }
    public function calcularHorasExtras(){
        return $this->horasExtras * 20;
    }
    public function calcularSalarioBruto(){
        return $this->salarioBase + $this->calcularHorasExtras();
    }
}
?>