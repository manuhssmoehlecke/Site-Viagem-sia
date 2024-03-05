<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ásia</title>
    <link rel="stylesheet" href="css/estilo-login.css">
</head>
<body>
    <header>
        <h1>Faça o login para prosseguir!</h1>
         <!-- O vídeo como plano de fundo -->
         <div class="img-background">
<img src="imgs/login.jpg" alt="login">

         </div>
    </header>

    <main>
        <form id="form-login" method="post">
            <label for="username">E-mail:</label>
            <input type="text" id="username" name="username" required>

            <div class="line"></div> <!-- Linha horizontal -->

            <label for="password"><br> Senha:</label>
            <input type="password" id="password" name="password" required>

            <div class="line"></div> <!-- Linha horizontal -->

            <label for="id"><br>Usuário</label>
            <input type="text" id="username" name="username" required>

            <div class="line"></div> <!-- Linha horizontal -->



            <div class="container">
                <button>Prosseguir</button>
            </div>

        </form>
    </main>

<footer>

 &copy; 2023 Viagem à Ásia

 </footer>
 <script>
 document.getElementById('form-login').addEventListener('submit', function(event) {
     event.preventDefault(); // Impede o envio padrão do formulário
     window.location.href = "/tela.html"; // Redireciona para a página desejada
 });
</script>

</body>
</html>
