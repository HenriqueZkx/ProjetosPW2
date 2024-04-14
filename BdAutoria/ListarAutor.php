<html>
    <head><meta charset = "UTF-8">
        <title>Menu</title>
        <link rel="stylesheet" href="CSS/Menus.css">
        <link rel="stylesheet" href="CSS/listar.css">
    </head>
    
    

    <body>
    <header>
        <nav>
            <a class="logo">Autor</a>
            <ul class="nav-list">
                <li><a>Principal</a></li>
                <li><a href="CadastrarAutor.php">Cadastrar</a></li>
                <li><a href="ExcluirAutor.php">Excluir</a></li>
                <li><a href="PesquisarAutor.php">Pesquisar</a></li>
                <li><a>Listar</a></li>
                <li><a>Alterar</a></li>
            </ul>
        </nav>
    </header>
        <h1>Relação de autores cadastrados</h1></div>

        <?php

        include_once 'Autor.php';
        $a = new Autor();
        $autor_bd=$a->listar();

        ?>
        <div style='text-align: center;'>
        <b> Cod_Autor &nbsp;&nbsp;&nbsp;&nbsp; NomeAutor &nbsp;&nbsp;&nbsp;&nbsp; Sobrenome &nbsp;&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp; Nascimento</b>
        <?php
        foreach($autor_bd as $autor_mostrar){
        ?>

        <br><br>
        <b> <?php echo $autor_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $autor_mostrar[1]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $autor_mostrar[2]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $autor_mostrar[3]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $autor_mostrar[4]; ?>    
        <?php     
        }
        echo "<br><br><button><a href = 'MenuBDAutor.html'>Voltar</a></button>";?>
        </div>
    </body>
</html>