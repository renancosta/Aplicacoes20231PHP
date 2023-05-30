<?php
class Cliente {
    public $nomeCliente; 
    public $saldoConta;
    public $numeroConta;

    function __construct($nomeCliente, $saldoConta, $numeroConta) {
        $this->nomeCliente = $nomeCliente;
        $this->saldoConta = $saldoConta;
        $this->numeroConta = $numeroConta;
    }
    
    public function confirmarRecebimento() {
        echo "<br>Confirmado o recebimento na conta".$this->numeroConta; 
        
    } 
    public function pagarConta($valor) { 
        echo "<br>Valor a pagar: R$ " . $valor; 
        $this->saldoConta -= $valor;
    } 
}
