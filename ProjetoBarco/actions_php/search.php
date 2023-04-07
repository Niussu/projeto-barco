<?php
    require_once('../models/conect.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $word = $_POST['input_text'];
        $conection = new Conect('localhost', 'db_barco', 'root', '');
        $sql = "SELECT * FROM `barco` WHERE `model` = ?;";
        $param = array($word);
        foreach ($conection->Consult($sql, $param) as $key) {
            echo $key['id']." / ".$key['model']." / ".$key['manufacturer']." / ".$key['optional_description']." / ".$key['color'];
        }
    }
?>