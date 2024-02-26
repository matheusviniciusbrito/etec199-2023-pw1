
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <img src="LogoIndex.png" alt="" height="195">
                    
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
                <h1 class="title-aula">Modulo 3</h1>
                    <h2>Função Quadrática</h2>
                    <br>
                    <p>
                        A função quadrática, também chamada de função polinomial de 2º grau, é uma função representada pela seguinte expressão: 
                    </p>
                    <br>
                    <p>f(x) = ax2 + bx + c
                    <br>
                     Onde a, b e c são números reais e a ≠ 0.
                    </p>

                    <li>Exemplo:</li>

                    <p>f(x) = 2x2 + 3x + 5,
                        <br>
                        sendo,
                        <br>
                        a = 2 <br>
                        b = 3 <br>
                        c = 5 <br>
                        
                        Nesse caso, o polinômio da função quadrática é de grau 2, pois é o maior expoente da variável.</p>

                        <li>Como resolver uma função quadrática?</li>
                    <p>Confira abaixo o passo-a-passo por meio um exemplo de resolução da função quadrática:</p>

                    <li>Exemplo</li>
                    <p>
                        Determine a, b e c na função quadrática dada por: f(x) = ax2 + bx + c, sendo: <br>

f (-1) = 8 <br>
f (0) = 4 <br>
f (2) = 2 <br>

Primeiramente, vamos substituir o x pelos valores de cada função e assim teremos:
<br>
f (-1) = 8 <br>
a (-1)2 + b (–1) + c = 8 <br>
a - b + c = 8 (equação I) <br>

f (0) = 4 <br>
a . 02 + b . 0 + c = 4 <br>
c = 4 (equação II) <br>

f (2) = 2 <br>
a . 22 + b . 2 + c = 2 <br>
4a + 2b + c = 2 (equação III) <br>

Pela segunda função f (0) = 4, já temos o valor de c = 4.
<br>
Assim, vamos substituir o valor obtido para c nas equações I e III para determinar as outras incógnitas (a e b):
<br>
(Equação I)
<br>
<br>
a - b + 4 = 8 <br>
a - b = 4 <br>
a = b + 4 <br>

Já que temos a equação de a pela Equação I, vamos substituir na III para determinar o valor de b:
<br>
(Equação III)
<br>
4a + 2b + 4 = 2 <br>
4a + 2b = - 2 <br>
4 (b + 4) + 2b = - 2 <br>
4b + 16 + 2b = - 2 <br>
6b = - 18 <br>
b = - 3 <br>

Por fim, para encontrar o valor de a substituímos os valores de b e c que já foram encontrados. Logo:
<br>
(Equação I)
<br>
a - b + c = 8 <br>
a - (- 3) + 4 = 8 <br>
a = - 3 + 4 <br>
a = 1 <br>

Sendo assim, os coeficientes da função quadrática dada são: <br>

a = 1 <br>
b = - 3 <br>
c = 4 <br>

<li>Raízes da Função</li>

As raízes ou zeros da função do segundo grau representam aos valores de x tais que f(x) = 0. As raízes da função são determinadas pela resolução da equação de segundo grau:
<br>
<b>f(x) = ax2 +bx + c = 0</b>
<br>
Para resolver a equação do 2º grau podemos utilizar vários métodos, sendo um dos mais utilizados é aplicando a Fórmula de Bhaskara, ou seja:
<div class="imgs-modulo">
    <div><img src="fq.png" alt=""></div>
</div>

<li>Exemplo</li>
<br>
Encontre os zeros da função f(x) = x2 – 5x + 6. <br>

<li>Solução:</li>
<br>
Sendo <br>
a = 1 <br>
b = – 5 <br>
c = 6 <br>

<div class="imgs-modulo">
    <div><img src="transferir.png" alt=""></div>
</div>

Substituindo esses valores na fórmula de Bhaskara, temos: <br>

x igual a numerador menos b mais ou menos raiz quadrada de b ao quadrado menos 4 a c fim da raiz sobre denominador 2 a fim da fração igual a numerador 5 mais ou menos raiz quadrada de 25 menos 24 fim da raiz sobre denominador 2 fim da fração x com 1 subscrito igual a numerador 5 mais 1 sobre denominador 2 fim da fração igual a 6 sobre 2 igual a 3 x com 2 subscrito igual a numerador 5 menos 1 sobre denominador 2 fim da fração igual a 4 sobre 2 igual a 2
<br>
Portanto, as raízes são 2 e 3.
<br>
Observe que a quantidade de raízes de uma função quadrática vai depender do valor obtido pela expressão: Δ = b2 – 4. ac, o qual é chamado de discriminante.
<br>
Assim,
<br>
<li>
    <ol>Se Δ > 0, a função terá duas raízes reais e distintas (x1 ≠ x2);</ol>
    <ol> Se Δ , a função não terá uma raiz real;</ol>
    <ol>Se Δ = 0, a função terá duas raízes reais e iguais (x1 = x2).</ol>
</li>

<li>Gráfico da função quadrática</li>

O gráfico das funções do 2º grau são curvas que recebem o nome de parábolas. Diferente das funções do 1º grau, onde conhecendo dois pontos é possível traçar o gráfico, nas funções quadráticas são necessários conhecer vários pontos.
<br>
A curva de uma função quadrática corta o eixo x nas raízes ou zeros da função, em no máximo dois pontos dependendo do valor do discriminante (Δ). Assim, temos:
<br>

<li>
    <ol>Se Δ > 0, o gráfico cortará o eixo x em dois pontos;</ol>
    <ol>Se Δ</ol>
    <ol>Se Δ = 0, a parábola tocará o eixo x em apenas um ponto.</ol>
</li>

Existe ainda um outro ponto, chamado de vértice da parábola, que é o valor máximo ou mínimo da função. Este ponto é encontrado usando-se a seguinte fórmula:

<div class="imgs-modulo">
    <div><img src="transferir (1).png" alt=""></div>
</div>
<br>
O vértice irá representar o ponto de valor máximo da função quando a parábola estiver voltada para baixo e o valor mínimo quando estiver para cima.
<br>
É possível identificar a posição da concavidade da curva analisando apenas o sinal do coeficiente a. Se o coeficiente for positivo, a concavidade ficará voltada para cima e se for negativo ficará para baixo, ou seja:
<br>
<div class="imgs-modulo">
    <img src="funcao2grauconcavidade.webp" alt="">
</div>
<br>
Assim, para fazer o esboço do gráfico de uma função do 2º grau, podemos analisar o valor do a, calcular os zeros da função, seu vértice e também o ponto em que a curva corta o eixo y, ou seja, quando x = 0.

<br>
A partir dos pares ordenados dados (x, y), podemos construir a parábola num plano cartesiano, por meio da ligação entre os pontos encontrados.

Aprenda O que é função.

            <div class="Quiz" onclick="quiz3()"><div>Iniciar Quiz</div></div>
                            

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