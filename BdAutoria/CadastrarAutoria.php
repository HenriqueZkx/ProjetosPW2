<html>
    <head><meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Cadastrar</title>
</head>

<body>


<div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Dados do autor</h1>
            <div class = "input-box">
                <center><h3>Código do Autor: <input name = "txtcodautor" type = "text" size = "20" maxlength = "20" placeholder = "Codigo do Autor" required></h3></center>
            </div><br>

            <div class = "input-box">
                <center><h3>Código do Livro: <input name = "txtcodlivro" type = "text" size = "20" maxlength = "20" placeholder = "Codigo do livro" required></h3></center>
            </div><br><br>
            <div class = "input-box">
                <center><h3>Data de Lançamento: <input name = "DataLan" type = "date" placeholder = "Data" required></h3></center>
            </div><br>
            <div class = "input-box">
                <center><h3>Editora: <input name = "txteditora" type = "text" size = "50" maxlength = "50" placeholder = "Editora"required></h3></center>
            </div><br>
            <center>
            <button type = "submit" class = "btn" name = "btnenviar">Cadastrar</button>
            <button type = "submit" class = "btn" name = "btnconsultar">Limpar</button>
            </center>
        </form>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)){
        include_once 'Autoria.php';
        $pro = new Autoria();
        $pro->setCodAutor($txtcodautor);
        $pro->setCodLivro($txtcodlivro);
        $pro->setdatalancamento($DataLan);
        $pro->seteditora($txteditora);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }

    ?>

    <br>
    <center>
    <button type = "submit" class = "btn"><a href = "MenuBDAutoria.html">Voltar</a></button>
</body>
</html>