<!-- 

    nome, Email, Senha(md5), Usuario, Endereço, cpf, rg --- cpf e rg validar
    Foto dos documentos (cpf e rg) e comprovaente de residencia
 -->

<?php 
    include_once 'includes/header.php'; 
    include_once 'php_action/db_connect.php';

?>
<?php?>
<section>
<div class="container">
    <div class="row">
        <form class="col s6" action="registrar.php" method="POST">
        <div class="row">
            
            <div class="input-field col s6">
            <input id="usuario" name="usuario" type="text" class="validate">
            <label for="usuario">Usuario: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="senha" name="senha" type="password" class="validate">
            <label for="senha">Senha: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="senha" name='confSenha' type="password" class="validate">
            <label for="senha">Senha de Confirmação: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>


            <div class="input-field col s6">
            <input id="endereco" name="endereco" type="text" class="validate">
            <label for="endereco">Endereço: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="cpf" name="cpf" type="number" class="validate">
            <label for="cpf">CPF: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="rg" name="rg" type="number" class="validate">
            <label for="rg">RG: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <!-- Centralizar  o botao concluir -->
            <div class="input-field col s6">
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
            
            
            <button class="btn waves-effect waves-light" type="submit" name="btn_concluir">Colcluir<i class="material-icons left"></i></button>

        </div>
        </form>
    </div>
</div>

</section>
<?php include_once 'includes/footer.php'; ?>

<?php

    $erros;

    // antes de continuar a validação, Tirar O campo nome da pagina de registro e tirar o campo nome do banco
    if (isset($_POST['btn_concluir'])) {
        // echo "ola mundo";
       
        $usuario = mysqli_escape_string($connect, $_POST['usuario']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);
        $confSenha = mysqli_escape_string($connect, $_POST['confSenha']);
        $endereco = mysqli_escape_string($connect, $_POST['endereco']);
        $cpf = mysqli_escape_string($connect, $_POST['cpf']);
        $rg = mysqli_escape_string($connect, $_POST['rg']);

        if (condition) {
            # code...
        }
    }

?>