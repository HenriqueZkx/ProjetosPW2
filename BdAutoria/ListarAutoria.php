<html>
    <head><meta charset = "UTF-8">
    <link rel="stylesheet" href="CSS/listar.css">
        <title>Menu</title>
    </head>
   
    <body>
        <h1>Relação de autoria cadastrados</h1></div>

        <?php

        include_once 'Autoria.php';
        $auto = new Autoria();
        $autoria_bd=$auto->listar();

        ?>
        <div style='text-align: center;'>
        <b> Cod_Autor &nbsp;&nbsp;&nbsp;&nbsp; Cod_Livro &nbsp;&nbsp;&nbsp;&nbsp; Data de Lançamento &nbsp;&nbsp;&nbsp;&nbsp; Editora</b>
        <?php
        foreach($autoria_bd as $autoria_mostrar){
        ?>

        <br><br>
        <b> <?php echo $autoria_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $autoria_mostrar[1]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $autoria_mostrar[2]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $autoria_mostrar[3]; ?>      
        <?php     
        }
        echo "<br><br><button><a href = 'MenuBDAutoria.html'> Voltar </a></button>";?>
        </div>
    </body>
</html>