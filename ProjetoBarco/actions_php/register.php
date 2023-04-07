<?php
    require_once ('../models/barco.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $model = $_POST['model'];
        $manufacturer = $_POST['manufacturer'];
        $opt_desc = $_POST['optional_description'];
        $color = $_POST['color'];

        $barco = new Barco($model, $manufacturer, $opt_desc, $color);
        header('location: ../pages/index.html');
    }
?>