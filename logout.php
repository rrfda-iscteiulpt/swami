<?php
/**
 * Created by PhpStorm.
 * User: rrfar
 * Date: 30/05/2019
 * Time: 11:52
 */
    session_start();
    session_destroy();
    header("location: index.php");

    ?>