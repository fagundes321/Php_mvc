<?php 
class FabricanteModel {
 
    public $id;
    public $fabricante;

    function __construct($id = null, $fabricante = null)
    {
        $this->id = $id;
        $this->fabricante = $fabricante;
    }

}

