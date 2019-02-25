<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/jquery_3.3.1.js"></script>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    <script src="../js/materialize.min.js"></script>
    <title>PINEAPPLE-SHOP INDEX</title>
    <style>      

        @media screen and (min-width: 320px) and (max-width: 424px){
            
            #brand-logo{
                font-size: 15px;
            }

        }

        @media screen and (min-width: 425px) and (max-width: 767px){

            #brand-logo{
                font-size: 20px;
            }
        
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });

        $(document).ready(function() {
            $('.droplogin-trigger').dropdown();
        });

    </script>
    
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
            <li><a href="../php_action/logout.php">Sair</a></li>
            <!-- <li><a href=" php_action/logout.php">Sair</a></li> -->
            <!-- <li><a href="#!">two</a></li>
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
            <a href="../index.php" id="brand-logo" name="brand-logo" class="brand-logo">PINEAPPLE-SHOP</a>

            <a href="#" class="sidenav-trigger"  data-target="mobile-nav"><i class="material-icons">menu</i></a>

            <ul  class="right hide-on-med-and-down" >
                <li><a href="">PRODUTOS</a></li>
                <li><a href="">CATEGORIAS</a></li>
                <!-- <li><a id="login" href="login.php">LOGIN</a></li> -->
                <li><a class='droplogin-trigger btn' href='#' data-target='Menu-login' id='painelUsuario'><?php if(!empty($_SESSION['id'])){ echo $_SESSION['nome']; } else{ echo "Login"; } ?></a></li>
            </ul>

            </div>
        </nav>
    </header>