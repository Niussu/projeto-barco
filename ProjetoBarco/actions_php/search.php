<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/show.css">
    <link rel="stylesheet" href="../styles/body.css">
    <title>Document</title>
</head>
<body>
<button><a href="../pages/index.html">Voltar ao menu</a></button>
    <div>
        <h1>Barcos que correspondem a pesquisa</h1>
<?php
    require_once('../models/conect.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $word = $_POST['input_text'];
        $conection = new Conect('localhost', 'db_barco', 'root', '');
        $sql = "SELECT * FROM `barco` WHERE `model` = ?;";
        $param = array($word);
        foreach ($conection->Consult($sql, $param) as $key) {
            echo "<p>".$key['id']." / ".$key['model']." / ".$key['manufacturer']." / ".$key['optional_description']." / ".$key['color']."</p>";
        }
    }
?>
    </div>
</body>
</html>