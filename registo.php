<?php
/**
 * Created by PhpStorm.
 * User: rrfar
 * Date: 28/05/2019
 * Time: 15:00
 */

session_start();
?>

<!DOCTYPE html>
<html lang="en">

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

    <link rel="stylesheet" type="text/css" href="/css/estilo.css"/>

    <body>
        <section class="registration" id="registration">
            <div class="registration" id="registration-content">
                <div class="container" align="center">
                    <img src="img/icon2.png" class="img-fluid" alt="">
                    <p></p>
                   <div class="col-md-4" id="col-md-4">
                       <h1>Registo</h1>
                       <form id="reg" action="registo_do.php" method="post">
                           <div class="form-group" style="text-align:left">
                               <label for="Username">Username</label>
                               <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Introduzir username">
                           </div>
                           <div class="form-group" style="text-align:left">
                               <label for="E-mail">E-mail</label>
                               <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduzir e-mail" >
                           </div>
                           <div class="form-group" style="text-align:left">
                               <label for="Nome">Nome</label>
                               <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Introduzir nome" >
                           </div>
                           <div class="form-group" style="text-align:left">
                               <label for="Password">Password</label>
                               <input type="password" name="password" class="form-control" id="pw" aria-describedby="usernameHelp" placeholder="Introduzir password" >
                           </div>
                           <div class="form-group" style="text-align:left">
                               <label for="Categoria">Catgoria</label>
                               <select class="form-control" name="cat">
                                   <option disabled selected value="">-- Selecione a categoria --</option>
                                   <option value="C">Cliente</option>
                                   <option value="P">Profissional</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <button type="submit" class="btn" style="background-color:#b21f2d;color:white" style="width:50%">Registar</button>
                           </div>
                       </form>

                   </div>
                    <?php
                    $type="";
                    $message="";
                    $go_to_login="";

                    if(isset($_REQUEST['status'])) {
                    switch ($_REQUEST['status']) {
                        case 0:
                            $type= "alert-danger";
                            $message = "Utilizador já existente!!!!";
                            break;
                        case 1:
                            $type= "alert-danger";
                            $message = "Erro no registo!!!!";
                            break;
                        case 2:
                            $type="alert-info";
                            $message="Registado com sucesso";
                            $go_to_login=TRUE;
                            break;
                        default:
                            break;
                    }
                    ?>
                    <p></p>
                    <div class="col-sm-4">
                        <div class="alert <?php echo $type;?>" role="alert">
                            <?php echo $message; ?>
                        </div>
                        <?php
                        }
                        if($go_to_login == TRUE){?>
                        <a href="login_page.php" class="btn btn-success" role="button">Continuar para o Login</a>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </section>



        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/new-age.js"></script>
    </body>


</html>
