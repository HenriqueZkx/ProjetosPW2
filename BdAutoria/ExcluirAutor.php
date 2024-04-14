<html>
    <head><meta charset = "UTF-8">
        <title>Exclusão</title>
    </head>
    <link rel="stylesheet" href="CSS/login.css">

    <body>
        

    <div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Informe o id do autor desejado</h1>
            <div class = "input-box">
                <center><h3>Id: <input name = "txtid" type = "text" size = "20" maxlength = "5" placeholder = "Id do autor" required></h3></center>
            </div><br>

            <button type = "submit" class = "btn" name = "btnenviar">Excluir</button>
            <button type = "submit" class = "btn" name = "btnconsultar">Limpar</button>
            </center>
        </form>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)){
        include_once 'Autor.php';
        $pro = new Autor();

        $pro->setCodAut($txtid);
        echo "<h3>" . $pro->exclusao() . "</h3>";
    }
    ?>

    <br>
    <center>
    <button type = "submit" class = "btn" name><a href = "MenuBDAutor.html">Voltar</a></button>
</body>
</html>