<?php 

class ModeloModel{
    public $id;
    public $fabricante;
    public $modelo_fabricante;

    function __construct($id = null, FabricanteModel $fabricante = null, $modelo_fabricante = null)
    {
        $this->id = $id;

        
        $this->modelo_fabricante = $modelo_fabricante;
        if ($fabricante != null){
            $this->fabricante = $fabricante;
        }else{
            $this->fabricante = new FabricanteModel;
        }
    }
}