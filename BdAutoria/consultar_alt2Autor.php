<html>
    <head><meta charset="UTF-8">
    <title>Alterar</title>
    <link rel="stylesheet" href="CSS/CSSphp.css">
</head>

<body>

<center>

            <?php
                $txtid=$_POST["txtid"];
                include_once 'Autor.php';
                $p = new Autor();
                $p->setCodAut($txtid);
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
                <br><br><br> <b><?php echo "Sobrenome: ";?></b>
                <input type = "text" name = "txtsobre" size = "10" value = '<?php echo $pro_mostrar[2]?>'>
                <br><br><br> <b><?php echo "Email: ";?></b>
                <input type = "text" name = "txtemail" size = "50" value = '<?php echo $pro_mostrar[3]?>'>
                <br><br><br> <b><?php echo "Nascimento: ";?></b>
                <input type = "text" name = "txtnasc" size = "10" value = '<?php echo $pro_mostrar[4]?>'>
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
                include_once 'Autor.php';
                $pro = new Autor();
                $pro->setNomeAut($txtnome);
                $pro->setSobrenome($txtsobre);
                $pro->setemail($txtemail);
                $pro->setNascimento($txtnasc);
                echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
                
            }
            ?>
            <center><br><br><br><br>
            <button><a href = "MenuBDAutor.html">Voltar</a></button>
        </body>
    </html>