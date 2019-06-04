<?php
/**
 * Created by PhpStorm.
 * User: rrfar
 * Date: 28/05/2019
 * Time: 17:04
 */

session_start()

?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <link rel="shortcut icon" href="img/favicon.ICO" type="image/x-icon">
        <link rel="icon" href="img/favicon.png" type="image/x-icon">
        <title>Swami - Choose When and Where</title>

        <style>
            body{
                background-image: url("/img/bg-login.png");
            }
        </style>
    </head>
    <body>
        <div class="container" align="center">
            <div class="col-4">
                <p></p>
                <img src="img/icon2.png" class="img-fluid" alt="">
                <h2 style="color: white">Login</h2>
                <form action="login.php" method="post">
                    <div class="form-group" style="text-align:center">
                        <label for="Username" style="color: white">Username</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Introduzir username" style="text-align:center">
                    </div>
                    <div class="form-group" style="text-align:center">
                        <label for="Password" style="color: white">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Introduzir Password" style="text-align:center">
                    </div>
                    <button type="submit" class="btn" style="background-color:#e7e7e7;color:black">Login</button>
                </form>

                <?php
                $type="";
                $message="";
                if(isset($_REQUEST['status'])) {
                    switch ($_REQUEST['status']) {
                        case 0:
                            $type= "alert-danger";
                            $message = "Erro na autenticação!!!!";
                            break;
                        case 1:
                            $type= "alert-danger";
                            $message = "Erro conexão!!!!";
                            break;
                        default:
                            break;
                    }
                    ?>
                    <p></p>
                    <div class="alert <?php echo $type;?>" role="alert">
                            <?php echo $message; ?>
                    </div>
                    <?php
                }
                ?>
        </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/new-age.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>