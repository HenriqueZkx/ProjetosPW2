<html>
    <head><meta charset = "UTF-8">
        <title>Pesquisar</title>
    </head>
    <link rel="stylesheet" href="CSS/login.css">
    <body>
        
     

    <div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Informe o nome do autor desejado</h1>
            <div class = "input-box">
                <h3><center>Nome: <input name = "txtnome" type = "text" size = "20" maxlength = "5" placeholder = "Nome do Autor" required></h3></center>
            </div><br><br>

            <center>
            <button type = "submit" class = "btn" name = "btnenviar">Pesquisar</button>
            <button type = "submit" class = "btn" name = "btnconsultar">Limpar</button>
            </center>
        </form> 

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)){
        include_once 'Autor.php';
        $pro = new Autor();

        $pro->setNomeAut($txtnome. '%');
        $pro_bd = $pro-> consultar();
        foreach($pro_bd as $pro_mostrar){
            ?><br>
            <b> <?php echo "Cod_Autor: " . $pro_mostrar[0];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "NomeAutor: " . $pro_mostrar[1];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Sobrenome: " . $pro_mostrar[2];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Email: " . $pro_mostrar[3];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <b> <?php echo "Nasc: " . $pro_mostrar[4];?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
        }
    }
    ?>
    <br>
    <center>
    <button type = "submit" class = "btn"><a href = "MenuBDAutor.html">Voltar</a></button>
</body>
</html>