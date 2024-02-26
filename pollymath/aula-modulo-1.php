
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mediaquery.css">
    <link rel="stylesheet" href="aula.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="modules.css">
    <script defer src="sidebar.js"></script>
    <script defer src="learn.js"></script>
    <title>Polly Math</title>
</head>
<body>
    <div id="principal">
        <div class="sidebar">
            <div class="sidebar-title">
                <img src="Logo.png" alt=""  width="330">
                    
            </div>
            <div class="sidebar-locate">
                <div class="sidebar-learn" onclick="main()">
                    <div class="sidebar-square on-locate off">
                        <svg width="23" height="27" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.28571 0C3.05571 0 2.85857 0.0328571 2.66143 0.0985714C1.38 0.361429 0.361429 1.38 0.0985714 2.66143C0 2.85857 0 3.05571 0 3.28571V21.3571C0 24.0843 2.20143 26.2857 4.92857 26.2857H23V23H4.92857C4.00857 23 3.28571 22.2771 3.28571 21.3571C3.28571 20.4371 4.00857 19.7143 4.92857 19.7143H23V1.64286C23 0.722857 22.2771 0 21.3571 0H19.7143V9.85714L16.4286 6.57143L13.1429 9.85714V0H3.28571Z" fill="black"/>
                        </svg>                                                
                    </div>
                    <div>Aprender</div>
                </div>
                <div class="sidebar-friends" onclick="ranking()">
                    <div class="sidebar-square">
                        <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.33332 1.33333C4.59165 1.33333 3.16665 3.10666 3.16665 5.29166C3.16665 7.47666 4.59165 9.25 6.33332 9.25C8.07498 9.25 9.49998 7.47666 9.49998 5.29166C9.49998 3.10666 8.07498 1.33333 6.33332 1.33333ZM3.02415 9.25C1.34582 9.32916 -1.52588e-05 10.7067 -1.52588e-05 12.4167V14H12.6667V12.4167C12.6667 10.7067 11.3367 9.32916 9.64248 9.25C8.78748 10.2158 7.61582 10.8333 6.33332 10.8333C5.05082 10.8333 3.87915 10.2158 3.02415 9.25Z" fill="black"/>
                            <path d="M23.6667 1.33333C21.925 1.33333 20.5 3.10666 20.5 5.29166C20.5 7.47666 21.925 9.25 23.6667 9.25C25.4083 9.25 26.8333 7.47666 26.8333 5.29166C26.8333 3.10666 25.4083 1.33333 23.6667 1.33333ZM20.3575 9.25C18.6792 9.32916 17.3333 10.7067 17.3333 12.4167V14H30V12.4167C30 10.7067 28.67 9.32916 26.9758 9.25C26.1208 10.2158 24.9492 10.8333 23.6667 10.8333C22.3842 10.8333 21.2125 10.2158 20.3575 9.25Z" fill="black"/>
                            <path d="M14.6667 0C12.2833 0 10.3333 2.42667 10.3333 5.41667C10.3333 8.40667 12.2833 10.8333 14.6667 10.8333C17.05 10.8333 19 8.40667 19 5.41667C19 2.42667 17.05 0 14.6667 0ZM10.1383 10.8333C7.84167 10.9417 6 12.8267 6 15.1667V17.3333H23.3333V15.1667C23.3333 12.8267 21.5133 10.9417 19.195 10.8333C18.025 12.155 16.4217 13 14.6667 13C12.9117 13 11.3083 12.155 10.1383 10.8333Z" fill="#141414"/>
                        </svg>                        
                    </div>
                    <div>Ranking</div>
                </div>
                <div class="sidebar-profile" onclick="perfil()">
                    <div class="sidebar-square">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 0C8.3375 0 5.75 3.22 5.75 7.1875C5.75 11.155 8.3375 14.375 11.5 14.375C14.6625 14.375 17.25 11.155 17.25 7.1875C17.25 3.22 14.6625 0 11.5 0ZM5.49125 14.375C2.44375 14.5188 0 17.02 0 20.125V23H23V20.125C23 17.02 20.585 14.5188 17.5088 14.375C15.9563 16.1288 13.8288 17.25 11.5 17.25C9.17125 17.25 7.04375 16.1288 5.49125 14.375Z" fill="black"/>
                        </svg>                        
                    </div>
                    <div>Perfil</div>
                </div>
                
            </div>   
        </div>
    
        <div class="aula-main">
            <div class="aula">
                <h1 class="title-aula">Modulo 1</h1>
                    <h2>Função crescente e descrecente</h2>
                    <br>
                    <p>
                        Uma função de primeiro grau é uma função polinomial de grau 1 (maior expoente da
                    variável X) e, tem a forma: Y = AX + B ou F(X) = AX + B , sendo A ≠ 0. 
                    </p>
                    <br>
                    <p>As constantes a e b são os coeficientes, sendo:
                    
                        <li>a o coeficiente angular; determina a inclinação da reta.</li>
                        <li>b o coeficiente linear: intercepta o eixo y.</li>
                    </p>

                    <p>O plano cartesiano permite a representação gráfica de uma função, em que o eixo 𝑥
                        representa a variável independente e 𝑦 é a variável dependente</p>

                    <p>O gráfico de toda função de toda função polinomial de primeiro grau é representado por
                        uma reta inclinada que pode ser crescente ou decrescente, e que interceptará 𝑥 em um ponto e
                        o eixo 𝑦 em outro ponto do plano cartesiano</p>

                    <p>
                        Para a construção gráfica da função do 1º grau, é necessário:


<br>
                    <li>Crescimento ou Decrescimento:</li>	

                    <div class="imgs-modulo">
                        <div>Se o coeficiente 𝑎 for um número
                            positivo, a função é crescente.
                            ⟹ crescente
                            <br>
                            <img src="Imagem1.png" alt="" width="160px">
                        </div>
                        <div>Se o coeficiente 𝑎 for um número
                            negativo, a função é decrescente.
                            ⟹ decrescente
                            <br>
                            <img src="Imagem2.png" alt="" width="160px">
                        </div>
                    </div>
                    </p>

                    <p>
                     <li>Zero da função: ponto que intercepta o eixo 𝑥 e possui ordenada igual a zero, ou seja,</li>

<br>
                    <div class="imgs-modulo">
                        <div>
                            Substituindo na função:
 
                    𝑦 = 𝑎𝑥 + 𝑏 
                    <br>
                    0 = 𝑎𝑥 + 𝑏
                    <br>
                    −𝑎𝑥 = +𝑏
                    <br>
                    +𝑏
                    <br>
                    𝑥 = −𝑎
                    <br>
                    Logo, o ponto (− 𝑏 , 0) é o ponto em que a função intercepta o eixo 𝑥.
                    𝑎
                        </div>
                    
                    </div>
                    <li>Ordenada de abscissa zero; ponto que intercepta o eixo 𝑦, ou seja, 𝑥 = 0. Substituindo na função:</li>
                    <div class="imgs-modulo">
                        <div>
                            
                            <br>
                            𝑦 = 𝑎𝑥 + 𝑏
                            <br>
                            𝑦 = 𝑎. 0 + 𝑏
                            <br>
                            𝑦 = 0 + 𝑏
                            <br>
                            Logo, o ponto (0, 𝑏) é o ponto da função que intercepta o eixo 𝑦.


                        </div>
                    </div>


                    <li>Representação gráfica:</li>
                    <div class="imgs-modulo">
                        
                        <div>a > 0
                            <br>
                            <img src="Imagem3.png" alt="">
                        </div>

                        <div>a < 0
                            <br>
                            <img src="Imagem4.png" alt="">
                        </div>
                    </div>

                    </p>

                    <h2>Tipos de Função</h2>
                    
                        <li>Função Afim:</li>
                        <p>    f(x) = ax + b , onde a e b são números reais dados e 𝑎 ≠ 0.

                            O gráfico de uma função afim é uma reta não perpendicular ao eixo Ox.
                        </p>    
                        <div class="imgs-modulo">
                            
                                   <img src="Imagem5.png" alt="">        
                           
                        </div>
                    
                        <li>Função Linear:</li>
                        <p>    f(x) = ax (a ∈  ℝ) , onde a e b são números reais dados e 𝑎 ≠ 0.

                            O gráfico de uma função afim é uma reta não perpendicular ao eixo Ox.
                        </p>    
                        <div class="imgs-modulo"> 
                            
                                
                                   <img src="Imagem7.png" alt=""> 
                               
                                
                           
                        </div>

                        <li>Função Constante:</li>
                        <p>    uma função definida por 𝑓: ℝ → ℝ chama-se constante quando existe uma constante 𝑏 ∈ ℝ tal que 𝑓(𝑥) = 𝑏 para todo 𝑥 ∈ ℝ .
                            O gráfico de uma função constante, é uma reta paralela ou coincidente ao eixo 𝑂𝑥 que intercepta o eixo 𝑂𝑦 no ponto de ordenada 𝑏.
                            </p>    
                        <div class="imgs-modulo"> 
                            
                               
                                   <img src="Imagem8.png" alt=""> 
                               
                                
                                
                           
                        </div>

                        <li>Função identidade:</li>
                        <p>    elementos do domínio terão como imagem um elemento com o mesmo valor do elemento no domínio, pois 𝑦 sempre será igual a 𝑥.|</p>    
                        <div class="imgs-modulo"> 
                            
                                <div>
                                   <img src="Imagem10.png" alt=""> 
                                </div>
                        </div>
                        <div class="Quiz" onclick="quiz1()"><div>Iniciar Quiz</div></div>
                        

            </div>
        </div>

    </div>
    <div class="sidebar-responsive">
          <div class="selecionado "  onclick="main()">
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
          <div onclick="perfil()">
            <svg width="30" height="27" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5 0C8.3375 0 5.75 3.22 5.75 7.1875C5.75 11.155 8.3375 14.375 11.5 14.375C14.6625 14.375 17.25 11.155 17.25 7.1875C17.25 3.22 14.6625 0 11.5 0ZM5.49125 14.375C2.44375 14.5188 0 17.02 0 20.125V23H23V20.125C23 17.02 20.585 14.5188 17.5088 14.375C15.9563 16.1288 13.8288 17.25 11.5 17.25C9.17125 17.25 7.04375 16.1288 5.49125 14.375Z" fill="black"/>
            </svg>
          </div>                 
    </div>

</body>
</html>