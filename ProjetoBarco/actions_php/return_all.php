<?php
    require_once('../models/conect.php');
    $conection = new Conect('localhost', 'db_barco', 'root', '');
    $table = 'barco';
    foreach ($conection->ReturnAll($table) as $key) {
        echo $key['id']." / ".$key['model']." / ".$key['manufacturer']." / ".$key['optional_description']." / ".$key['color']."<br>";
    }
?>