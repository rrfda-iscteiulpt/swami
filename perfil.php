<?php
/**
 * Created by PhpStorm.
 * User: rrfar
 * Date: 03/06/2019
 * Time: 15:04
 */

    session_start();

    if(!isset($_SESSION['id'])){
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-image: url("/img/bg-registo.png");
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        thead{
            color: gray;
        }
        th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
            background-color: whitesmoke;
        }

    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/favicon.ICO" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Swami - Choose When and Where</title>
</head>
<body>
    <div class="container-fluid" align="center">
        <div class="col-8">
            <p></p>
            <a href="logged.php">
            <img src="img/icon2.png" class="img-fluid" alt=""></a>
            <h2 style="color: white">Histórico de Pedidos/Entregas</h2>
            <table>
                <thead>
                        <tr>
                            <th>Referência</th>
                            <th>Data Pedido</th>
                            <th>Descrição</th>
                            <th>Estado</th>
                        </tr>
                </thead>
                <?php
                $db = mysqli_connect("127.0.0.1", "dev", "12345678", "swamiDB") or die("Erro na ligação à BD!!!");
                $sql = "SELECT ref, dataIN,descricao,estado FROM swamiDB.Pedidos WHERE Pedidos.cliente='".$_SESSION['id']."';";
                $result=mysqli_query($db,$sql);
                if($result){
                    if($result->num_rows>0){
                    while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th><?php echo $row["ref"]; ?>
                        </th>
                        <th><?php echo $row["dataIN"]; ?>
                        </th>
                        <th><?php echo $row["descricao"]; ?>
                        </th>
                        <th><?php echo $row["estado"]; ?></th></tr>
                        <?php

                    }}}
                ?>
            </table>
        </div>
        <div class="col-8">
            <p></p>
            <h2 style="color: white">Códigos Promocionais</h2>
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Validade</th>
                    </tr>
                </thead>
                <?php
                $sql2 = "SELECT codPromocional, descricao, validade FROM swamiDB.Codigos WHERE cliente='".$_SESSION['id']."';";
                $result2=mysqli_query($db,$sql2);
                if($result2){
                    if($result2->num_rows>0){
                        while ($row2 = mysqli_fetch_assoc($result2)){
                            ?>
                            <tr>
                                <th><?php echo $row2["codPromocional"]; ?>
                                </th>
                                <th><?php echo $row2["descricao"]; ?>
                                </th>
                                <th><?php echo $row2["validade"]; ?>
                                </th>
                            </tr>
                            <?php

                        }}} mysqli_close($db2);
                ?>
            </table>
        </div>
    </div>
</body>
