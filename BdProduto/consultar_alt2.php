<html>
    <head><meta charset="UTF-8">
    <title>Alterar</title>
    <link rel="stylesheet" href="CSS/php.css">
</head>

<body>


    <center>

            <?php
                $txtid=$_POST["txtid"];
                include_once 'Produto.php';
                $p = new Produto();
                $p->setId($txtid);
                $pro_bd = $p->alterar();
            ?>
            <br><form name = "cliente2" method = "POST" action = "">
            <?php
                foreach($pro_bd as $pro_mostrar)
                {
            ?> 
                <input type = "hidden" name = "txtid" size = "5" value='<?php echo $pro_mostrar[0]?>'>
                <b><?php echo "ID: " . $pro_mostrar[0];?></b>
                <br><br><br><b><?php echo "Nome: ";?></b>
                <input type = "text" name = "txtnome" size = "25" value = '<?php echo $pro_mostrar[1]?>'>
                <br><br><br> <b><?php echo "Estoque: ";?></b>
                <input type = "text" name = "txtestoq" size = "10" value = '<?php echo $pro_mostrar[2]?>'>
                <br><br><br><center>
                    <input name = "btnalterar" type = "submit" value = "Alterar">    
                    <?php
                }
                ?>
                </form>
            </fieldset>

            <?php
            extract($_POST, EXTR_OVERWRITE);
            if(isset($btnalterar))
            {
                include_once 'Produto.php';
                $pro = new Produto();
                $pro->setNome($txtnome);
                $pro->setEstoque($txtestoq);
                $pro->setId($txtid);
                echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
                
            }
            ?>
            <center><br><br><br><br>
            <button><a href = "MenuBDProduto.html">Voltar</a></button>
        </body>
    </html>