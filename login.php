<?php
session_start();
include_once 'includes/header.php';


if (!empty($_SESSION['vmsg'])) {
    include_once 'includes/msg.php';
    $_SESSION['vmsg'] = false;
}
?>

<section>

    <div class="container">
        <form action="php_action/verif_login.php" method="POST">

            <div class="row">
                <div class="col s12 m4 l2"><p></p></div>
                <div class="col s12 m4 l8"><p>
                    <div class="input-field col s6">
                    <input id="usuario" type="text" name="usuario" class="validate">
                    <label class="active" for="first_name2">NomeUsuario:</label>
                    </div>
                </p></div>
                <div class="col s12 m4 l2"><p></p></div>
            </div>

            <div class="row">
                <div class="col s12 m4 l2"><p></p></div>
                <div class="col s12 m4 l8"><p>
                    <div class="input-field col s6">
                    <input id="senha" type="password" name="senha" class="validate">
                    <label class="active" for="first_name2">Senha:</label>
                    </div>
                </p></div>
                <div class="col s12 m4 l2"><p></p></div>
            </div>

            <div class="row">
                <div class="col s12 m4 l2"><p></p></div>
                <div class="col s12 m4 l8"><p>
                <button class="btn waves-effect waves-light" type="submit" name="btn_entrar">Entrar<i class="material-icons left">vpn_key</i></button>
                <button class="btn waves-effect waves-light" type="submit" name="btn_registrar">Registrar<i class="material-icons left">perm_device_information</i></button>
                </p></div>
                <div class="col s12 m4 l2"><p></p></div>
            </div>

        </form>
    </div> 
    
</section>

<?php
include_once 'includes/footer.php';
?>