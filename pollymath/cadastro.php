<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polly Math</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo-login">
            <a href="index.php"><h1>Poly Math</h1></a>
        </div>
    </header>

    <main>
            
        <form action="cadastrar.php" method="POST">
            <div class="card-login">
                <h1>Cadastro</h1>

                <div class="inputs">
                    
                    <div class="input">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="40" viewBox="0 0 38 40" fill="none">
                            <path d="M17.2064 3.27695C15.8329 3.27695 14.4903 3.70412 13.3483 4.50445C12.2063 5.30478 11.3162 6.44232 10.7906 7.77322C10.265 9.10412 10.1275 10.5686 10.3954 11.9815C10.6634 13.3944 11.3248 14.6922 12.296 15.7108C13.2672 16.7294 14.5045 17.4231 15.8516 17.7042C17.1987 17.9852 18.595 17.841 19.8639 17.2897C21.1329 16.7384 22.2175 15.8048 22.9805 14.6071C23.7436 13.4093 24.1509 12.0011 24.1509 10.5605C24.1509 8.6288 23.4192 6.7762 22.1169 5.41026C20.8145 4.04432 19.0482 3.27695 17.2064 3.27695ZM17.2064 14.9307C16.3823 14.9307 15.5767 14.6744 14.8915 14.1942C14.2063 13.714 13.6723 13.0315 13.3569 12.2329C13.0416 11.4344 12.959 10.5557 13.1198 9.70795C13.2806 8.86023 13.6774 8.08154 14.2601 7.47037C14.8429 6.85919 15.5853 6.44297 16.3935 6.27435C17.2018 6.10573 18.0396 6.19227 18.8009 6.52304C19.5623 6.8538 20.213 7.41394 20.6709 8.1326C21.1287 8.85127 21.3731 9.69619 21.3731 10.5605C21.3731 11.7196 20.9341 12.8311 20.1527 13.6507C19.3713 14.4703 18.3115 14.9307 17.2064 14.9307ZM29.7064 30.9546V29.4978C29.7064 26.7934 28.6821 24.1998 26.8588 22.2875C25.0356 20.3752 22.5627 19.3008 19.9842 19.3008H14.4286C11.8501 19.3008 9.37726 20.3752 7.55399 22.2875C5.73072 24.1998 4.70642 26.7934 4.70642 29.4978V30.9546H7.4842V29.4978C7.4842 27.5661 8.21584 25.7135 9.51818 24.3476C10.8205 22.9816 12.5869 22.2143 14.4286 22.2143H19.9842C21.826 22.2143 23.5923 22.9816 24.8947 24.3476C26.197 25.7135 26.9286 27.5661 26.9286 29.4978V30.9546H29.7064Z" fill="#07BEB8"/>
                        </svg>
                        <input type="text" name="nome" placeholder="Username" >
                    </div>
                        
                      <div class="input">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="40" viewBox="-3 0 25 20" fill="none" >
                            <path d="M18 4L10 9L2 4V2L10 7L18 2M18 0H2C0.89 0 0 0.89 0 2V14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H18C18.5304 16 19.0391 15.7893 19.4142 15.4142C19.7893 15.0391 20 14.5304 20 14V2C20 1.46957 19.7893 0.960859 19.4142 0.585786C19.0391 0.210714 18.5304 0 18 0Z" fill="#07BEB8"/>
                          </svg>
                        <input type="text" name="email" placeholder="E-mail" >
    
                    </div>
                
                    <div class="input">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="40" viewBox="0 0 38 40" fill="none">
                            <path d="M28.0708 11.8355H26.5083V8.92205C26.5083 4.90152 23.0083 1.63847 18.6958 1.63847C14.3833 1.63847 10.8833 4.90152 10.8833 8.92205V11.8355H9.3208C7.60205 11.8355 6.1958 13.1465 6.1958 14.7489V29.3161C6.1958 30.9185 7.60205 32.2295 9.3208 32.2295H28.0708C29.7896 32.2295 31.1958 30.9185 31.1958 29.3161V14.7489C31.1958 13.1465 29.7896 11.8355 28.0708 11.8355ZM14.0083 8.92205C14.0083 6.50391 16.1021 4.55191 18.6958 4.55191C21.2896 4.55191 23.3833 6.50391 23.3833 8.92205V11.8355H14.0083V8.92205ZM28.0708 29.3161H9.3208V14.7489H28.0708V29.3161ZM18.6958 24.9459C20.4146 24.9459 21.8208 23.6349 21.8208 22.0325C21.8208 20.4301 20.4146 19.1191 18.6958 19.1191C16.9771 19.1191 15.5708 20.4301 15.5708 22.0325C15.5708 23.6349 16.9771 24.9459 18.6958 24.9459Z" fill="#07BEB8"/>
                        </svg>
                        <input type="password" name="password" placeholder="Password" >
                    
                    </div>

                    
                </div>
                <div class="btn">
                    <a href="index.php"><input type="submit" name="submit" class="btn-login" placeholder="Cadastrar"></a>
                        <a href="index.php">Já tenho uma <span>conta</span></a>
                </div>

            </div>
        </form>

    </main>
    
    <footer></footer>
</body>
</html>
