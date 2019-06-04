<?php
    session_start();
    $db = mysqli_connect("127.0.0.1", "ped", "12345678", "swamiDB") or die("Erro na ligação à BD!!!");

    $email = mysqli_real_escape_string($db,$_REQUEST['email']);
    $usr = mysqli_real_escape_string($db,$_REQUEST['username']);
    $name = mysqli_real_escape_string($db,$_REQUEST['nome']);
    $pw = mysqli_real_escape_string($db,$_REQUEST['password']);
    $cat = mysqli_real_escape_string($db,$_REQUEST['cat']);


    $ask= "SELECT email,username from swamiDB.Utilizador where Utilizador.email ='".$_REQUEST['email']."'AND Utilizador.username='".$_REQUEST['usr']."';";


    if($answer = mysqli_query($db,$ask)) {
        if ($answer->num_rows == 0) {
            $sql = "INSERT INTO swamiDB.Utilizador (email,username, nome,pword,categoria) values('".$email."','".$usr."','".$name."','".$pw."','".$cat."');";
            if($email!='' and $usr!='' and $name!='' and $pw!=''){
                if ($db->query($sql) === TRUE) {
                    header("location: registo.php?status=2");
                }
                else{
                    header("location: registo.php?status=1");
                }
            } else {
                header("location: registo.php?status=1");
            }
        } else {
            header("location: registo.php?status=0");
        }
    }

    $db->close();
?>

