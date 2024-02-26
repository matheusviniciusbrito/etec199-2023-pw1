<?php

if(isset($_POST['submit'])) {
 // print_r($_POST['nome']);
  //print_r($_POST['password']);
  //print_r($_POST['email']);
    include_once('config.php');
  
    $nome = $_POST['nome'];
    $email= $_POST['email'];
    $senha= $_POST['password'];
    $link_foto = "https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png";

    $consulta_usuario = "SELECT * FROM usuario WHERE nome = '$nome'";
    $resultado_usuario = mysqli_query($conexao, $consulta_usuario);
    $consulta_email = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado_email = mysqli_query($conexao, $consulta_email);

    if (mysqli_num_rows($resultado_usuario) > 0 || mysqli_num_rows($resultado_email) > 0) {
    	header('Location:cadastro.php');

    } else {
        $resultado = mysqli_query($conexao, "INSERT INTO usuario (nome,email,senha,xp_total,link_foto) 
    	VALUES ('$nome','$email','$senha','0','$link_foto');");
        header('Location:index.php');
    }
        
}


?>
