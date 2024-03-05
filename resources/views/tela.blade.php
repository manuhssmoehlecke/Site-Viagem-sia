<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ásia</title>
    <link rel="stylesheet" href="tela.css">
</head>
<body>
    <header>
        <h1>Vamos nos conhecer <br> melhor!</h1>
         <!-- O vídeo como plano de fundo -->
         <div class="img-background">
<img src="login.jpg" alt="login">

         </div>   
    </header>

    <main>
        <form id="form-login" method="post">

            <h2>
                Quantos países da Ásia você gostaria de conhecer?
            </h2>
            
            <h2>
                Qual você gostaria de conhecer primeiro?
            </h2>

            <h3>
                Obrigada por compartilhar seus objetivos!
            </h3>


            <div class="container">
                <button>Prosseguir</button>
            </div>
            
        </form>
    </main>

 <script>
 document.getElementById('form-login').addEventListener('submit', function(event) {
     event.preventDefault(); // Impede o envio padrão do formulário
     window.location.href = "animais.html"; // Redireciona para a página desejada
 });
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    <select id="pais" name="pais">

        <option value="um">Um</option>
        <option value="dois">Dois</option>
        <option value="Tres">Tres</option>
        <option value="quatro">Quatro</option>
        <option value="Cinco">Cinco</option>
        <option value="seis">Seis</option>
        <option value="Sete">Sete</option>
        <option value="oito">Oito</option>
        <option value="nove">Nove</option>

    </select>

    <select id="asia" name="asia">

        <option value="um">Japão</option>
        <option value="dois">Hong Kong</option>
        <option value="Tres">Emirados Arábes</option>
        <option value="quatro">Tailândia</option>
        <option value="Cinco">Coreia do Sul</option>
        <option value="seis">China</option>
        <option value="Sete">Índia</option>
        <option value="oito">Indonésia</option>
        <option value="nove">Maldivas</option>

    </select>
</body>

</body>
</html>