<?php
		session_start();
        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)){
                
                
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location:index.php');
            exit();
        } 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polly Math</title>
    <link rel="stylesheet" href="lesson.css">
    <link rel="stylesheet" href="style.css">

    <script defer src="lesson.js"></script>
</head>
<body>
    <header>
        <div class="logo-login">
            <h1>Poly Math</h1>
        </div>
    </header>
    <main>
        <div class="left">
            <div class="logo"><img src="Logo.png" alt="" height="200px"></div>
            <div class="game">
                <div class="progressbar">

                </div>
                <div class="ask">Sei lá o que perguntar, bla bla bla?</div>
                <div class="answer">
                    <div class="res op1"></div>
                    <div class="res op2"></div>
                    <div class="res op3"></div>
                    <div class="res op4"></div>
                    <div class="res op5"></div>
                    <div class="res op6"></div>
                </div>
            </div>
        </div>
    </main>  
    <footer></footer>
</body>
</html>