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
                <center><h3>Título: <input name = "txttitulo" type = "text" size = "20" maxlength = "20" placeholder = "titulo do livro" required></h3></center>
            </div><br>

            <div class = "input-box">
                <center><h3>Categoria: <input name = "txtcate" type = "date" placeholder = "categoria" placeholder = "Codigo do livro" required></h3></center>
            </div><br><br>
            <div class = "input-box">
                <center><h3>ISBN: <input name = "txtisbn" type = "text" size = "50" maxlength = "50" placeholder = "isbn" required></h3></center>
            </div><br>
            <div class = "input-box">
                <center><h3>Idioma: <input name = "txtidioma" type = "text" size = "20" maxlength = "20" placeholder = "idioma do livro" required></h3></center>
            </div><br>
            <div class = "input-box">
                <center><h3>QtdePag: <input name = "txtqtde" type = "text" size = "20" maxlength = "20" placeholder = "qtde de pag" required></h3></center>
            </div><br>
            <center>
            <button type = "submit" class = "btn" name = "btnenviar">Cadastrar</button>
            <button type = "submit" class = "btn" name = "btnconsultar">Limpar</button>
            </center>
        </form>


    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)){
        include_once 'Livro.php';
        $pro = new Livro();
        $pro->settitulo($txttitulo);
        $pro->setcategoria($txtcate);
        $pro->setisbn($txtisbn);
        $pro->setidioma($txtidioma);
        $pro->setqtdePag($txtqtde);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }

    ?>

    <br>
    <center>
        <button><a href = "MenuBDLivro.html">Voltar</a></button>
</body>
</html>