<html>
    <head><meta charset = "UTF-8">
    <link rel="stylesheet" href="CSS/login.css">
        <title>Pesquisar</title>
    </head>

    <body>
        

    <div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Informe a Editora do livro desejado</h1>
            <div class = "input-box">
                <h3><center>Editora: <input name = "txtedit" type = "text" size = "20" maxlength = "35" placeholder = "Editora do Livro" required></h3></center>
            </div><br><br>

            <center>
            <button type = "submit" class = "btn" name = "btnenviar">Pesquisar</button>
            <button type = "submit" class = "btn" name = "btnconsultar">Limpar</button>
            </center>
        </form> 
    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)){
        include_once 'Autoria.php';
        $pro = new Autoria();

        $pro->seteditora($txtedit. '%');
        $pro_bd = $pro-> consultar();
        foreach($pro_bd as $pro_mostrar){
            ?><br>
            <b> <?php echo "Cod_Autor: " . $pro_mostrar[0];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Cod_Livro: " . $pro_mostrar[1];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "DataLancamento: " . $pro_mostrar[2];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Editora: " . $pro_mostrar[3];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
        }
    }
    ?>
    <br>
    <center>
    <button type = "submit" class = "btn"><a href = "MenuBDAutoria.html">Voltar</a></button>
</body>
</html>