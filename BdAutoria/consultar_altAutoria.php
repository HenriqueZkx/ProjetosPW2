<html>
    <head><meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Alterar</title>
</head>

<body>

    

<div class = "wrapper">
        <form action = "consultar_alt2Autoria.php" method = "POST" name = "cliente">
            <h1>Alterado de Autores Cadastrados(Autoria)</h1>
            <div class = "input-box">
                <h3><center>Id: <input name = "txtid" type="text" size="20" maxlength="5" placeholder="id do Autor" required></h3></center>
            </div><br><br>

            <center>
            <button type = "submit" class = "btn" name = "btenviar">Consultar</button>
            <button type = "submit" class = "btn" name = "limpar">Limpar</button>
            </center>
        </form> 

    <center> <br><br><br><br>
    <button type = "submit" class = "btn"><a href = "MenuBDAutoria.html">Voltar</a></button>
    </body>
    </html>