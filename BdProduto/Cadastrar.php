
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href ="CSS/login.css"> 
    <title>Cadastro</title>
</head>
<body>
    <div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Cadastro de Produtos</h1>
            <div class = "input-box">
                <center><h3>Nome:<input name = "txtnome" type="text" placeholder = "Nome do Produto" required></h3></center>
            </div><br>

            <div class = "input-box">
                <center><h3>Estoque:<input name = "txtestoq" type ="password" placeholder = "Estoque" required></h3></center>
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
        $pro->setNome($txtnome);
        $pro->setEstoque($txtestoq);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }

    ?>

    <br>
    <center>
        <button type = "submit" class = "btn"><a href = "MenuBDProduto.html">Voltar</a></button>
</body>
</html>