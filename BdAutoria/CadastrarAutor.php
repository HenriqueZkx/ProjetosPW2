<html>
    <head><meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>



<div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Dados do autor</h1>
            <div class = "input-box">
                <center><h3>Nome:<input name = "txtnome" type="text" placeholder = "Nome autor" required></h3></center>
            </div><br>

            <div class = "input-box">
                <center><h3>sobrenome:<input name = "txtsobrenome" type ="password" placeholder = "sobrenome" required></h3></center>
            </div><br><br>
            <div class = "input-box">
                <center><h3>email:<input name = "txtemail" type="text" placeholder = "email" required></h3></center>
            </div><br>
            <div class = "input-box">
                <center><h3>Data de Nascimento:<input name = "DataNasci" type="text" placeholder = "Data" required></h3></center>
            </div><br>
            <center>
            <button type = "submit" class = "btn" name = "btnenviar">Cadastrar</button>
            <button type = "submit" class = "btn" name = "btnconsultar">Limpar</button>
            </center>
        </form>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)){
        include_once 'Autor.php';
        $pro = new Autor();
        
        $pro->setNomeAut($txtnome);
        $pro->setSobrenome($txtsobrenome);
        $pro->setemail($txtemail);
        $pro->setNascimento($DataNasci);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }

    ?>

    <br>
    <center>
    <button type = "submit" class = "btn"><a href = "MenuBDAutor.html">Voltar</a></button>
</body>
</html>