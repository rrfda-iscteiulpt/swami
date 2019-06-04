<?php

session_start();

$username =$_REQUEST['username'];
$password =$_REQUEST['password'];


$db = mysqli_connect("127.0.0.1", "dev", "12345678", "swamiDB") or die("Erro na ligação à BD!!!");
$sql = "SELECT idUtilizador FROM swamiDB.Utilizador WHERE Utilizador.username='".$username."' AND Utilizador.pword='".$password."'";
$result= $db->query($sql);

if($result) {
    if($result->num_rows == 1) {
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION['id'] = $row["idUtilizador"];
        }
        header("Location: logged.php");
    } else {
        header("Location: login_page.php?status=0");
    }
} else {
    header("Location: login_pagee.php?status=1");
}

