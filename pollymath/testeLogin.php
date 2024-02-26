<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){
    include_once('config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Adicionei aspas simples ao redor de $email e $password
    $sqlNome = "SELECT nome FROM usuario WHERE email = '$email' and senha = '$password'";
    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$password'";
    $nome = $conexao->query($sql);
    $result = $conexao->query($sql);
    
    // Verifiquei se o número de linhas é igual a 0
    if(mysqli_num_rows($result) == 0){

        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location:index.php');
        
    }else{
       $_SESSION['email'] = $email;
       $_SESSION['password'] = $password;
       $_SESSION['nome'] = $nome;
       header('Location:main.php');
        
    }
} else {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location:index.php');
}
?>