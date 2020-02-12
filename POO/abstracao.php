<?php

//ABSTRACAO E CLASSE ABSTRATA

//CLASSE ABSTRATA NAO PODE SER INSTANCIADA
//ELA SERVE COMO MODELO PARA OUTRAS
//TODOS OS METODOS ABASTRATOS OBRIGATORIAMENTE TEM QUE ESTAR NAS CLASSES FILHAS HERDADAS

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;
    
    public function setSaldo($s){
    
        $this->saldo = $s;
    }
    
     public function getSaldo(){
    
        return $this->saldo;
    }
    
    abstract public function Sacar($s);
    abstract public function Depositar($d);
    
}

//ITAU
class Itau extends Banco{
   
    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<br> Sacou uma quantia de R$ " .$s;
    }

    public function Depositar($d) {
        $this->saldo += $d;
        echo "<br> Depositou uma quantia de R$ " .$d;

    }

}

$itau = new Itau();
$itau->setSaldo(1500);
echo "<hr> Saldo Disponível: R$ ". $itau->getSaldo();
$itau->Sacar(500);
echo "<hr> Saldo Disponível: R$ ". $itau->getSaldo();
$itau->Depositar(1400);
echo "<hr> Saldo Disponível: R$ ". $itau->getSaldo();
