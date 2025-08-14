<?php 

class ServicoModel{
    public $orcamento;
    public $feito;
    public $descricao;

    function __construct($orcamento, $feito, $descricao)
    {
        $this->orcamento = $orcamento;
        $this->feito = $feito;
        $this->descricao = $descricao;
    }
}