<html>
    <head><meta charset = "UTF-8">
        <title>Pesquisar</title>
        <link rel="stylesheet" href="CSS/login.css">
    </head>

    <body>
        
    <div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Pesquisar Produtos</h1>
            <div class = "input-box">
                <h3><center>Nome:<input name = "txtnome" type="text" placeholder = "Nome do Produto" required></h3></center>
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

        $pro->setNome($txtnome. '%');
        $pro_bd = $pro-> consultar();
        foreach($pro_bd as $pro_mostrar){
            ?><br>
            <b> <?php echo "ID: " . $pro_mostrar[0];?></b>
            <b> <?php echo "Nome: " . $pro_mostrar[1];?></b>
            <b> <?php echo "Estoque: " . $pro_mostrar[2];?></b>
            <?php
        }
    }
    ?>
    <br>
    <center>
        <button type = "submit" class = "btn"><a href = "MenuBDProduto.html">Voltar</a></button>
</body>
</html>
