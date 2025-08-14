<?php 

class OrcamentoModel{

    
    public $id;
    public $dt_servico;
    public $valor;
    public $observacao;
    
    // na Variavel carro já ira armazenar tudo sobre o carro
    public $carro;

    // na Variavel cliente já ira armazenar tudo sobre o cliente
    public $cliente;

    function __construct($id = null, $dt_servico = null, $valor = null, $observacao = null, $carro = null, $cliente = null)
    {
        $this->id = $id;
        $this->dt_servico = $dt_servico;
        $this->valor = $valor;
        $this->observacao = $observacao;
        $this->carro = $carro;
        $this->cliente = $cliente;
    }


}