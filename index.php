<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Vagas</title>
    <link rel="stylesheet" href="./css/login.css">
     <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!---->
</head>
<body> 
    <div class="root">
        <div class="container-left">
            <img src="https://bizenglish.com.tr/wp-content/uploads/2020/02/Etkili-Cover-Letter-Nas%C4%B1l-Yaz%C4%B1l%C4%B1r.jpg">
        </div>
        <div class="container-right">
            <div class="form-container">
                <h1>Gerenciador de Vagas</h1>
                <div class="form-container-inputs">
                    <p>Usuário:</p>
                    <input type="text" name="userName" class="form-control" id="user_input" placeholder="e-mail/matricula">
                    <p>Senha:</p>
                    <input type="password" name="passwUser" class="form-control" id="passw_input" placeholder="senha">
                </div>
                <div class="forgot-container">
                    <a href="#">↪ Esqueci a senha!</a>
                </div>
                <div class="button-container">
                    <button>Entrar</button>
                </div>
                <div class="register-account">
                    <p>Não tem uma conta ? <a href="./pages/formStep1.php">Inscreva-se</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

