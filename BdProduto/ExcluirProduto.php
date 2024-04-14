<html>
    <head><meta charset = "UTF-8">
        <title>Exclusão</title>
        <link rel="stylesheet" href="CSS/login.css">
    </head>

    <body>
        

    <div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Exclusão de Produtos</h1>
            <div class = "input-box">
                <h3><center>Id:<input name = "txtnome" type="text" placeholder = "Id do Produto" required></h3></center>
            </div><br><br>

            <center>
            <button type = "submit" class = "btn" name = "btnenviar">Cadastrar</button>
            <button type = "submit" class = "btn" name = "btnconsultar">Limpar</button>
            </center>
        </form> 

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)){
        include_once 'Produto.php';
        $pro = new Produto();

        $pro->setId($txtid);
        echo "<h3>" . $pro->exclusao() . "</h3>";
    }
    ?>

    <br>
    <center>
        <button type = "submit" class = "btn" name><a href = "MenuBDProduto.html">Voltar</a></button>
</body>
</html>