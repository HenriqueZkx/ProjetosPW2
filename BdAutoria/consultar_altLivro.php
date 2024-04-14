<html>
    <head><meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Alterar</title>
</head>

<body>


<div class = "wrapper">
        <form action = "consultar_altLivro2.php" method = "POST" name = "cliente">
            <h1>Informe o id do livro desejado</h1>
            <div class = "input-box">
                <h3><center>Id: <input name = "txtid" type="text" size="20" maxlength="5" placeholder="id do autor" required></h3></center>
            </div><br><br>

            <center>
            <button type = "submit" class = "btn" name = "btenviar">Consultar</button>
            <button type = "submit" class = "btn" name = "limpar">Limpar</button>
            </center>
        </form> 

    <center> <br><br><br><br>
    <button type = "submit" class = "btn"><a href = "MenuBDLivro.html">Voltar</a></button>
    </body>
    </html>