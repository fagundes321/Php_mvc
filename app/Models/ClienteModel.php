<?php 

class ClienteModel{
    public $id;
    public $nome_cliente;
    public $carro;

    function __construct($id, $nome_cliente, $carro)
    {
        $this->id = $id;
        $this->nome_cliente = $nome_cliente;
        $this->carro = $carro;
    }
}