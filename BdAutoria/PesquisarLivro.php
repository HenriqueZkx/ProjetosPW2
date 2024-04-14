<html>
    <head><meta charset = "UTF-8">
    <link rel="stylesheet" href="CSS/login.css">
        <title>Pesquisar</title>
    </head>

    <body>
        

    <div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Informe o Titulo do Livro desejado:</h1>
            <div class = "input-box">
                <h3><center>Titulo: <input name = "txttitulo" type = "text" size = "20" maxlength = "25" placeholder = "Categoria do Livro" required></h3></center>
            </div><br><br>

            <center>
            <button type = "submit" class = "btn" name = "btnenviar">Pesquisar</button>
            <button type = "submit" class = "btn" name = "btnconsultar">Limpar</button>
            </center>
        </form> 

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)){
        include_once 'Livro.php';
        $pro = new Livro();

        $pro->settitulo($txttitulo. '%');
        $pro_bd = $pro-> consultar();
        foreach($pro_bd as $pro_mostrar){
            ?><br>
            <b> <?php echo "Cod_Livro: " . $pro_mostrar[0];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Título: " . $pro_mostrar[1];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Categoria: " . $pro_mostrar[2];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "ISBN: " . $pro_mostrar[3];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Idioma: " . $pro_mostrar[4];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "QtdePag: " . $pro_mostrar[5];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
        }
    }
    ?>
    <br>
    <center>
    <button type = "submit" class = "btn"><a href = "MenuBDLivro.html">Voltar</a></button>
</html>