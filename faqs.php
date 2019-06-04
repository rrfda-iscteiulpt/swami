<?php
/**
 * Created by PhpStorm.
 * User: rrfar
 * Date: 03/06/2019
 * Time: 16:19
 */

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
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <h1> A página encontra-se em construção</h1>
    <h3>Preencha o formulário abaixo e seremos brever a esclarecer as suas dúvidas</h3>


    <div class="container">
        <form action="logged.php">
            <div class="row">
                <div class="col-25">
                    <label for="Nome">Nome</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Introduza o seu nome">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">E-mail</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Introduza o seu e-mail">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="morada">Assunto</label>
                </div>
                <div class="col-75">
                    <input type="text" name="morada" placeholder="Introduza o assunto">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Dúvida</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Escreva-nos a sua dúvida" style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>
