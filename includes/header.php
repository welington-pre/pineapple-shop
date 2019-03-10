<?php

    function menuBarLoginAdmin(){
        echo '
            <li><a href="php_action/logout.php">CPainel ADMIN</a></li>
            <li><a href="php_action/logout.php">Sair</a></li> ';
    }
    function menuBarLoginFuncionario(){
        echo '<li><a href="php_action/logout.php">Sair</a></li> ';
    }
    function menuBarLoginCliente(){
        echo '<li><a href="php_action/logout.php">Sair</a></li> ';
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery_3.3.1.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">

    <script src="js/materialize.min.js"></script>

    <!-- meus css - js -->

    <link rel="stylesheet" type="text/css" href="css/header.css">
    
    <script src="js/header.js"></script>
    <!-- meus css - js -->

    <title>PINEAPPLE-SHOP</title>
    
</head>
<body>

    <header>
        <!-- Menu Mobile (320px - 992px) -->
        <ul class="sidenav" id="mobile-nav">
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="">PRODUTOS</a></li>
            <li><a href="">CATEGORIAS</a></li>
        </ul>

        <ul id='Menu-login' class='dropdown-content'>
            <!-- <li><a href="php_action/logout.php">Sair</a></li> -->
            <?php
               if (!empty($_SESSION['tipoConta'])) {
                    if ($_SESSION['tipoConta'] == "a") {
                        menuBarLoginAdmin();
                    } elseif ($_SESSION['tipoConta'] == "f") {
                        menuBarLoginFuncionario();
                    } elseif ($_SESSION['tipoConta'] == "c") {
                        menuBarLoginCliente();
                    }
               }
            ?>
            <!-- <li><a href=" php_action/logout.php">Sair</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#!">three</a></li>
            <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
            <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> -->
        </ul>

        <?php 
            // session_start();
            
        ?>

        <!-- Menu Desktop (992px) -->
        <nav class="yellow" style="padding: 0px 10px;">
            <div class="nav-wrapper">
            <a href="index.php" id="brand-logo" name="brand-logo" class="brand-logo">PINEAPPLE-SHOP</a>

            <a href="#" class="sidenav-trigger"  data-target="mobile-nav"><i class="material-icons">menu</i></a>

            <?php 

            
            if (empty($_SESSION['id']) || $_SESSION['id'] === null) {
                echo '
                <ul  class="right hide-on-med-and-down" >
                <li><a href="">PRODUTOS</a></li>
                <li><a href="includes/headerLogin.php">CATEGORIAS</a></li>
                <li><a id="login" href="login.php">LOGIN</a></li>
                </ul>
                ';
            } else {
                $nome = $_SESSION['usuario'];
                echo '
                <ul  class="right hide-on-med-and-down" >
                <li><a href="">PRODUTOS</a></li>
                <li><a href="includes/headerLogin.php">CATEGORIAS</a></li>
                <li><a class="droplogin-trigger btn" href="#" data-target="Menu-login" id="painelUsuario">'.$nome.'</a></li>
                </ul>
                ';
            }
            
            ?>

            </div>
        </nav>
    </header>