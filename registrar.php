<!-- 

    ps: validar campo usuario, para que nao tenha dois usuarios com o mesmo nome no banco de dados;

    nome, Email, Senha(md5), Usuario, Endereço, cpf, rg --- cpf e rg validar
    Foto dos documentos (cpf e rg) e comprovaente de residencia
 -->

<?php 
    include_once 'includes/header.php'; 
    include_once 'php_action/db_connect.php';
?>

<?php

    include_once('includes/validar.php');

    session_start();
    
    // if (!empty($_SESSION['vmsg'])) {
    //     include_once 'includes/msg.php';
    //     $_SESSION['vmsg'] = false;
    // }

    // antes de continuar a validação, Tirar O campo nome da pagina de registro e tirar o campo nome do banco
    if (isset($_POST['btn_concluir'])) {
       
        $usuario = mysqli_escape_string($connect, $_POST['usuario']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);
        $confSenha = mysqli_escape_string($connect, $_POST['confSenha']);
        $endereco = mysqli_escape_string($connect, $_POST['endereco']);
        $cep = mysqli_escape_string($connect, $_POST['cep']);
        $cpf = mysqli_escape_string($connect, $_POST['cpf']);
        $rg = mysqli_escape_string($connect, $_POST['rg']);

        if ((empty($cep)) || (empty($cpf)) || (empty($rg)) || (empty($usuario)) || (empty($email)) || (empty($senha)) || (empty($confSenha)) || (empty($endereco)) || ($senha !== $confSenha)) {
            if (empty($rg)) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "RG não pode ser um campo vazio";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
    
            if (empty($cpf)) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "CPF não pode ser um campo vazio";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }

            if (empty($cep)) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "CEP não pode ser um campo vazio";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }

            if (empty($endereco)) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "ENDEREÇO não pode ser um campo vazio";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
            if (empty($confSenha)) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "CONF_SENHA não pode ser um campo vazio";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
            if ($senha !== $confSenha) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = " a SENHA não confre com a comfirmação(CONF_SENHA)!";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
            if (empty($senha)) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "SENHA não pode ser um campo vazio";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
            if (empty($email)) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "E-MAIL não pode ser um campo vazio";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
            if (empty($usuario)) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "Usuario não pode ser um campo vazio";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
        } else {
            if (iscep($cep) == false) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "CEP inválido";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
            if (iscpf($cpf) == false) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "CPF inválido";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            }
            if (isrg($rg) == false) {
                $_SESSION['vmsg'] = true;
                $_SESSION['msg'] = "RG inválido";
                include 'includes/msg.php';
                $_SESSION['vmsg'] = false;
            } 
            
            if ((iscep($cep) == true) && (iscpf($cpf) == true) && (isrg($rg) == true)) {
                // $_SESSION['vmsg'] = true;
                // $_SESSION['msg'] = "Concluido com sucesso!";
                // include 'includes/msg.php';
                // $_SESSION['vmsg'] = false;

                $sql = "SELECT * FROM login WHERE usuario LIKE '%$usuario%'";

                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) < 1) {
                    // $_SESSION['vmsg'] = true;
                    // $_SESSION['msg'] = "Usuario pode ser cadastrado";
                    // include 'includes/msg.php';
                    // $_SESSION['vmsg'] = false;

                    $senha = md5($senha);

                    $sql = "INSERT INTO `login` (`id`, `usuario`, `senha`, `email`, `endereco`, `cep`, `cpf`, `rg`, `tipo`) VALUES (NULL, '$usuario', '$senha', '$email', '$endereco', '$cep', '$cpf', '$rg', 'c')";
                    $result = mysqli_query($connect, $sql);
                    if(!$result){
                        $_SESSION['vmsg'] = true;
                        $_SESSION['msg'] = "Erro ao realizar Cadastro";
                        include 'includes/msg.php';
                        $_SESSION['vmsg'] = false;
                    }
                } else {
                    $_SESSION['vmsg'] = true;
                    $_SESSION['msg'] = "Usuario ja esta sendo usado!";
                    include 'includes/msg.php';
                    $_SESSION['vmsg'] = false;
                }
            }
        }
    }
?>

<section>

    <div class="container">
        <div class="row">
            <form class="col s12" action="registrar.php" method="POST">
            <div class="row">

                <div class="input-field col s4">
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>
                
                <div class="input-field col s4">
                <input id="usuario" name="usuario" type="text" class="validate">
                <label for="usuario">Usuario: </label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email: </label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <input id="senha" name="senha" type="password" class="validate">
                <label for="senha">Senha: </label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <input id="senha" name='confSenha' type="password" class="validate">
                <label for="senha">Senha de Confirmação: </label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>


                <div class="input-field col s4">
                <input id="endereco" name="endereco" type="text" class="validate">
                <label for="endereco">Endereço: </label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <input id="cep" name="cep" type="text" class="validate">
                <label for="cep">CEP: </label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <input id="cpf" name="cpf" type="text" class="validate">
                <label for="cpf">CPF: </label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <input id="rg" name="rg" type="text" class="validate">
                <label for="rg">RG: </label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <!-- Centralizar  o botao concluir -->

                <div class="input-field col s4">
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <div class="input-field col s4">
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>

                <!-- Centralizar  o botao concluir -->
                
                
                <button class="btn waves-effect waves-light" type="submit" name="btn_concluir">Colcluir<i class="material-icons left"></i></button>

            </div>
            </form>
        </div>
    </div>

</section>
<?php include_once 'includes/footer.php'; ?>