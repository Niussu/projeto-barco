<?php
    require_once('../models/conect.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $conection = new Conect('localhost', 'db_barco', 'root', '');
        $sql = 'DELETE FROM barco WHERE id = ?';
        $param = array($id);
        $conection->Execute($sql, $param);
        header('location: return_all.php');
    }
?>