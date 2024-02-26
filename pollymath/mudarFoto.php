<?php 
    session_start();
    
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $foto = $_POST['foto']; 
	if($foto === null || $foto === ''){
    	header('Location:perfil.php');
        exit();
    }
    
    if(isset($_POST['submit'])){
        include_once('config.php');
        $resultado = mysqli_query($conexao, "UPDATE usuario SET link_foto = '$foto'  WHERE email = '$email' and senha = '$password';");
        header('Location:perfil.php');
        exit();

    }
?>