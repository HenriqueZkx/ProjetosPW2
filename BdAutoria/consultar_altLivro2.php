<html>
    <head><meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/CSSphp.css">
    <title>Alterar</title>
</head>

<body>


    <center>

            <?php
                $txtid=$_POST["txtid"];
                include_once 'Livro.php';
                $p = new Livro();
                $p->setCod_Livro($txtid);
                $pro_bd = $p->alterar();
            ?>
            <br><form name = "cliente2" method = "POST" action = "">
            <?php
                foreach($pro_bd as $pro_mostrar)
                {
            ?> 
                <input type = "hidden" name = "txtid" size = "5" value='<?php echo $pro_mostrar[0]?>'>
                <b><?php echo "ID: " . $pro_mostrar[0];?></b>
                <br><br><br><b><?php echo "Título: ";?></b>
                <input type = "text" name = "txtTitu" size = "25" value = '<?php echo $pro_mostrar[1]?>'>
                <br><br><br> <b><?php echo "Categoria: ";?></b>
                <input type = "text" name = "txtCate" size = "10" value = '<?php echo $pro_mostrar[2]?>'>
                <br><br><br> <b><?php echo "ISBN: ";?></b>
                <input type = "text" name = "txtIS" size = "50" value = '<?php echo $pro_mostrar[3]?>'>
                <br><br><br> <b><?php echo "Idioma: ";?></b>
                <input type = "text" name = "txtIdi" size = "10" value = '<?php echo $pro_mostrar[4]?>'>
                <br><br><br> <b><?php echo "Qtde de Página: ";?></b>
                <input type = "text" name = "txtPag" size = "10" value = '<?php echo $pro_mostrar[5]?>'>
                <br><br><br><center>
                    <input name = "btnalterar" type = "submit" value = "Alterar">    
                    <?php
                }
                ?>
                </form>
            </fieldset>
            </center>

            <?php
            extract($_POST, EXTR_OVERWRITE);
            if(isset($btnalterar))
            {
                include_once 'Livro.php';
                $pro = new Livro();
                $pro->settitulo($txtTitu);
                $pro->setcategoria($txtCate);
                $pro->setisbn($txtIS);
                $pro->setidioma($txtIdi);
                $pro->setqtdePag($txtPag);
                echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
                
            }
            ?>
            <center><br><br><br><br>
            <button><a href = "MenuBDAutoria.html">Voltar</a></button>
        </body>
    </html>