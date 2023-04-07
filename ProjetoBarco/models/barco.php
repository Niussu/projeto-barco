<?php
require_once('conect.php');
    class Barco {
        private $model;
        private $manufacturer;
        private $optional_description;
        private $color;
        private $conection;

        public function __construct($model, $manufacturer, $optional_description, $color) {
            $this->model = $model;
            $this->manufacturer = $manufacturer;
            $this->optional_description = $optional_description;
            $this->color = $color;
            $this->conection = new Conect('localhost', 'db_barco', 'root', ''); 

            $sql = 'INSERT INTO barco(model, manufacturer, optional_description, color)
            VALUES(?, ?, ?, ?)';

            $param = array($this->model, 
            $this->manufacturer, 
            $this->optional_description, 
            $this->color);

            $numRows = $this->conection->Execute($sql, $param);
        }
    }
?>