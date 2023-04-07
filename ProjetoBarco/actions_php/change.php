<?php
    require_once('../models/conect.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $option = $_POST['characteristics'];
        $new_value = $_POST['new_value'];
        $conection = new Conect('localhost', 'db_barco', 'root', '');
        $sql = 'UPDATE barco SET '.$option.' = ? WHERE id = ?';
        $param = array($new_value, $id);
        $conection->Execute($sql, $param);
        header('location: return_all.php');
    }
?>