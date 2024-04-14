<html>
    <head><meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/CSSphp.css">
    <title>Alterar</title>
</head>

<body>


    <center>

            <?php
                $txtid=$_POST["txtid"];
                include_once 'Autoria.php';
                $p = new Autoria();
                $p->setCodAutor($txtid);
                $pro_bd = $p->alterar();
            ?>
            <br><form name = "cliente2" method = "POST" action = "">
            <?php
                foreach($pro_bd as $pro_mostrar)
                {
            ?> 
                <input type = "hidden" name = "txtid" size = "5" value='<?php echo $pro_mostrar[0]?>'>
                <b><?php echo "ID: " . $pro_mostrar[0];?></b>
                <br><br><br><b><?php echo "Cod_Livro: ";?></b>
                <input type = "text" name = "txtCod" size = "25" value = '<?php echo $pro_mostrar[1]?>'>
                <br><br><br> <b><?php echo "Data de Lançamento: ";?></b>
                <input type = "text" name = "txtData" size = "10" value = '<?php echo $pro_mostrar[2]?>'>
                <br><br><br> <b><?php echo "Editora: ";?></b>
                <input type = "text" name = "txtEdit" size = "50" value = '<?php echo $pro_mostrar[3]?>'>
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
                include_once 'Autoria.php';
                $pro = new Autoria();
                $pro->setCodLivro($txtCod);
                $pro->setdatalancamento($txtData);
                $pro->seteditora($txtEdit);
                echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
                
            }
            ?>
            <center><br><br><br><br>
            <button><a href = "MenuBDAutoria.html">Voltar</a></button>
        </body>
    </html>