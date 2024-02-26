<?php 
    session_start();
    include_once('config.php');

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $sqlNome = "SELECT nome FROM usuario WHERE email = '$email' and senha = '$password'";
    $sqlFoto = "SELECT link_foto FROM usuario WHERE email = '$email' and senha = '$password'";
    $sqlXp = "SELECT xp_total FROM usuario WHERE email = '$email' and senha = '$password'";

    $resultNome = $conexao->query($sqlNome);
    $resultFoto = $conexao->query($sqlFoto);
    $resultXp = $conexao->query($sqlXp);
	

	$row = $resultNome->fetch_assoc();
    $logadoNome = $row ? $row['nome'] : "Desconhecido";

	$rowXp = $resultXp->fetch_assoc();
    $logadoXp = $rowXp ? $rowXp['xp_total'] : "0";


	
	$rowFoto = $resultFoto->fetch_assoc();
    $logadoFoto = $rowFoto ? $rowFoto['link_foto'] : "https://vagueanotherinstructionset--gabriellima146.repl.co/images-removebg-preview%20(1).png";
	





?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perfil.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="modules.css">
    <script defer src="sidebar.js"></script>
    <script defer src="user.js"></script>
    <title>Polly Math</title>
</head>
<body>
        <div class = "urlImage none">
                <form class="form" action="mudarFoto.php" method="POST">
                    <input class="url" name="foto" type="text" placeholder="https://url-image">
                    <input class="sub" name="submit" type="submit" value="salvar">
                </form>
         </div>
    <div id="principal">
        <div class="sidebar">
            <div class="sidebar-title">
                <img src="LogoIndex.png" alt="" height="195">
                    
            </div>
            <div class="sidebar-locate">
                <div class="sidebar-learn" onclick="main()">
                    <div class="sidebar-square">
                        <svg width="23" height="27" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.28571 0C3.05571 0 2.85857 0.0328571 2.66143 0.0985714C1.38 0.361429 0.361429 1.38 0.0985714 2.66143C0 2.85857 0 3.05571 0 3.28571V21.3571C0 24.0843 2.20143 26.2857 4.92857 26.2857H23V23H4.92857C4.00857 23 3.28571 22.2771 3.28571 21.3571C3.28571 20.4371 4.00857 19.7143 4.92857 19.7143H23V1.64286C23 0.722857 22.2771 0 21.3571 0H19.7143V9.85714L16.4286 6.57143L13.1429 9.85714V0H3.28571Z" fill="black"/>
                        </svg>                                                
                    </div>
                    <div>Aprender</div>
                </div>
                <div class="sidebar-friends" id="ranking" onclick="ranking()">
                    <div class="sidebar-square">
                        <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.33332 1.33333C4.59165 1.33333 3.16665 3.10666 3.16665 5.29166C3.16665 7.47666 4.59165 9.25 6.33332 9.25C8.07498 9.25 9.49998 7.47666 9.49998 5.29166C9.49998 3.10666 8.07498 1.33333 6.33332 1.33333ZM3.02415 9.25C1.34582 9.32916 -1.52588e-05 10.7067 -1.52588e-05 12.4167V14H12.6667V12.4167C12.6667 10.7067 11.3367 9.32916 9.64248 9.25C8.78748 10.2158 7.61582 10.8333 6.33332 10.8333C5.05082 10.8333 3.87915 10.2158 3.02415 9.25Z" fill="black"/>
                            <path d="M23.6667 1.33333C21.925 1.33333 20.5 3.10666 20.5 5.29166C20.5 7.47666 21.925 9.25 23.6667 9.25C25.4083 9.25 26.8333 7.47666 26.8333 5.29166C26.8333 3.10666 25.4083 1.33333 23.6667 1.33333ZM20.3575 9.25C18.6792 9.32916 17.3333 10.7067 17.3333 12.4167V14H30V12.4167C30 10.7067 28.67 9.32916 26.9758 9.25C26.1208 10.2158 24.9492 10.8333 23.6667 10.8333C22.3842 10.8333 21.2125 10.2158 20.3575 9.25Z" fill="black"/>
                            <path d="M14.6667 0C12.2833 0 10.3333 2.42667 10.3333 5.41667C10.3333 8.40667 12.2833 10.8333 14.6667 10.8333C17.05 10.8333 19 8.40667 19 5.41667C19 2.42667 17.05 0 14.6667 0ZM10.1383 10.8333C7.84167 10.9417 6 12.8267 6 15.1667V17.3333H23.3333V15.1667C23.3333 12.8267 21.5133 10.9417 19.195 10.8333C18.025 12.155 16.4217 13 14.6667 13C12.9117 13 11.3083 12.155 10.1383 10.8333Z" fill="#141414"/>
                        </svg>                        
                    </div>
                    <div>Ranking</div>
                </div>
                <div class="sidebar-profile">
                    <div class="sidebar-square on-locate off">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 0C8.3375 0 5.75 3.22 5.75 7.1875C5.75 11.155 8.3375 14.375 11.5 14.375C14.6625 14.375 17.25 11.155 17.25 7.1875C17.25 3.22 14.6625 0 11.5 0ZM5.49125 14.375C2.44375 14.5188 0 17.02 0 20.125V23H23V20.125C23 17.02 20.585 14.5188 17.5088 14.375C15.9563 16.1288 13.8288 17.25 11.5 17.25C9.17125 17.25 7.04375 16.1288 5.49125 14.375Z" fill="black"/>
                        </svg>                        
                    </div>
                    <div>Perfil</div>
                </div>
                <a href="sair.php" class="sidebar-profile">
                    <div class="sidebar-square on-locate"></div>
                    <div>Log out</div>
                </a>
            </div>   
        </div>
                    <div class="sidebar-responsive">
            <div onclick="main()">
              <svg width="23" height="27" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.28571 0C3.05571 0 2.85857 0.0328571 2.66143 0.0985714C1.38 0.361429 0.361429 1.38 0.0985714 2.66143C0 2.85857 0 3.05571 0 3.28571V21.3571C0 24.0843 2.20143 26.2857 4.92857 26.2857H23V23H4.92857C4.00857 23 3.28571 22.2771 3.28571 21.3571C3.28571 20.4371 4.00857 19.7143 4.92857 19.7143H23V1.64286C23 0.722857 22.2771 0 21.3571 0H19.7143V9.85714L16.4286 6.57143L13.1429 9.85714V0H3.28571Z" fill="black"/>
              </svg>
            </div>
            <div onclick="ranking()">
              <svg width="40" height="27" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.33332 1.33333C4.59165 1.33333 3.16665 3.10666 3.16665 5.29166C3.16665 7.47666 4.59165 9.25 6.33332 9.25C8.07498 9.25 9.49998 7.47666 9.49998 5.29166C9.49998 3.10666 8.07498 1.33333 6.33332 1.33333ZM3.02415 9.25C1.34582 9.32916 -1.52588e-05 10.7067 -1.52588e-05 12.4167V14H12.6667V12.4167C12.6667 10.7067 11.3367 9.32916 9.64248 9.25C8.78748 10.2158 7.61582 10.8333 6.33332 10.8333C5.05082 10.8333 3.87915 10.2158 3.02415 9.25Z" fill="black"/>
                  <path d="M23.6667 1.33333C21.925 1.33333 20.5 3.10666 20.5 5.29166C20.5 7.47666 21.925 9.25 23.6667 9.25C25.4083 9.25 26.8333 7.47666 26.8333 5.29166C26.8333 3.10666 25.4083 1.33333 23.6667 1.33333ZM20.3575 9.25C18.6792 9.32916 17.3333 10.7067 17.3333 12.4167V14H30V12.4167C30 10.7067 28.67 9.32916 26.9758 9.25C26.1208 10.2158 24.9492 10.8333 23.6667 10.8333C22.3842 10.8333 21.2125 10.2158 20.3575 9.25Z" fill="black"/>
                  <path d="M14.6667 0C12.2833 0 10.3333 2.42667 10.3333 5.41667C10.3333 8.40667 12.2833 10.8333 14.6667 10.8333C17.05 10.8333 19 8.40667 19 5.41667C19 2.42667 17.05 0 14.6667 0ZM10.1383 10.8333C7.84167 10.9417 6 12.8267 6 15.1667V17.3333H23.3333V15.1667C23.3333 12.8267 21.5133 10.9417 19.195 10.8333C18.025 12.155 16.4217 13 14.6667 13C12.9117 13 11.3083 12.155 10.1383 10.8333Z" fill="#141414"/>
              </svg> 
            </div>
            <div class="selecionado">
              <svg width="30" height="27" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.5 0C8.3375 0 5.75 3.22 5.75 7.1875C5.75 11.155 8.3375 14.375 11.5 14.375C14.6625 14.375 17.25 11.155 17.25 7.1875C17.25 3.22 14.6625 0 11.5 0ZM5.49125 14.375C2.44375 14.5188 0 17.02 0 20.125V23H23V20.125C23 17.02 20.585 14.5188 17.5088 14.375C15.9563 16.1288 13.8288 17.25 11.5 17.25C9.17125 17.25 7.04375 16.1288 5.49125 14.375Z" fill="black"/>
              </svg>
            </div>                 
        </div>
    	
       <div class="perfil-main">
            <?php 
                echo("<div class=\"perfil\">");
                echo("<div class=\"about-user\">");
                echo ("<img class=\"user-image\" src=\"" . $logadoFoto . "\" alt=\"\" width=\"200px\">");
               	echo('<div class="image-alternate"><div>mudar imagem</div></div>');
                echo("<h1 class=\"name-user\">$logadoNome</h1>");
       			echo("</div>");
        		echo("<div class=\"XP\">$logadoXp<span>XP</span></div>");
        		echo("</div>");
            ?>
        </div>
        <div class="none" id="perfil"></div>

    <!--IGNORA ISSO-->
    
</body>
</html>