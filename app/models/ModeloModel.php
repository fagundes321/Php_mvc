<?php 

class Modelo{
    public $id;
    public $id_fabricante;
    public $modelo_fabricante;

    function __construct($id = null, Fabricante $id_fabricante = null, $modelo_fabricante = null)
    {
        $this->id = $id;

        
        $this->modelo_fabricante = $modelo_fabricante;
        if ($id_fabricante != null){
            $this->id_fabricante = $id_fabricante;
        }else{
            $this->id_fabricante = new Fabricante;
        }
    }
}