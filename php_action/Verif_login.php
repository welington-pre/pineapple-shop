<?php
session_start();
include_once 'db_connect.php';

if (isset($_POST['btn_entrar'])) {
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $senha = md5($senha);

    // echo "user: $usuario <br/> pass: $senha";

    if (empty($usuario) or empty($senha)) {
        $_SESSION['vmsg'] = true;
        $_SESSION['msg'] = "Verifique o NomeUsuario e a senha e tente novamente";
        header('Location: ../login.php');
    } else {
        // $senha = md5($senha);
        $sql = "SELECT * FROM login WHERE usuario = '$usuario' AND senha= '$senha'";
        $result = mysqli_query($connect, $sql);
        
        // echo $result;

        // echo "user: $usuario <br/> pass: $senha";
        
        if (mysqli_num_rows($result) == 1) {
            $dados = mysqli_fetch_array($result);
            mysqli_close($connect);
            $_SESSION['vmsg'] = true;
            $_SESSION['msg'] = "Logado com sucesso!";
            $_SESSION['id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
            header('Location: ../index.php');
        } else {
            $_SESSION['vmsg'] = true;
            $_SESSION['msg'] = "Usuario inexistente!";
            header('Location: ../login.php');
        }
    }
    
}

if (isset($_POST['btn_registrar'])) {
    header('Location: ../registrar.php');
}