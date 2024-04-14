<html>
    <head><meta charset = "UTF-8">
        <title>Menu</title>
        <link rel="stylesheet" href="CSS/Site.css">
        <link rel="stylesheet" href="CSS/listar.css">
    </head>
    
    

    <body>

    <header>
        <nav>
            <a class="logo">Menu BD Produto</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li>Principal</li>
                <li><a href="Cadastrar.php">Cadastrar</a></li>
                <li><a href="ExcluirProduto.php">Excluir</a></li>
                <li><a href="PesquisarProduto.php">Pesquisar</a></li>
                <li><a href="Listar.php">Listar</a></li>
                <li><a href="consultar_alt.php">Alterar</a></li>
            </ul>
        </nav>
    </header><br>

        <h1>Relação de produtos cadastrados</h1></div>

<?php

    include_once 'Produto.php';
    $p = new Produto();
    $pro_bd=$p-> listar();
    ?>
    <div style='text-align: center;'>
    <b> Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Estoque</b>
    <?php
        foreach($pro_bd as $pro_mostrar){
            ?>
            
            <br><br>
            <b> <?php echo $pro_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $pro_mostrar[1]; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $pro_mostrar[2]; ?>
            <?php
        }
            echo "<br><br><button><a href = 'MenuBDProduto.html'>Voltar </a></button> "; ?>
            </section>
    </body>
</html>