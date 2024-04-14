<html>
    <head><meta charset = "UTF-8">
    <link rel="stylesheet" href="CSS/listar.css">
        <title>Menu</title>
    </head>

    <body>
        <h1>Relação de livros cadastrados</h1></div>

        <?php

        include_once 'Livro.php';
        $l = new Livro();
        $livro_bd=$l->listar();

        ?>
        <div style='text-align: center;'>
        <b> Cod_livro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Título &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Categoria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ISBN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Idioma &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; QtdePag</b>
        <?php
        foreach($livro_bd as $livro_mostrar){
        ?>

        <br><br>
        <b> <?php echo $livro_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $livro_mostrar[1]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $livro_mostrar[2]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $livro_mostrar[3]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $livro_mostrar[4]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $livro_mostrar[5]; ?>   
        <?php     
        }
        echo "<br><br><button><a href = 'MenuBDLivro.html'> Voltar </a></button>";?>
        </div>
    </body>
</html>