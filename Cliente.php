<?php
class Cliente {
    public $nomeCliente; 
    public $saldoConta;
    public $numeroConta;
    
    public function confirmarRecebimento() {
        echo "<br>Confirmado o recebimento na conta".$this->numeroConta; 
        
    } 
    public function pagarConta($valor) { 
        echo "<br>Valor a pagar: R$ " . $valor; 
        $this->saldoConta -= $valor;
    } 
}
