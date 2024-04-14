<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href ="CSS/login.css">
    <title>Login</title>
</head>
<body>
    <div class = "wrapper">
        <form action = "" method = "POST" name = "cliente">
            <h1>Login</h1>
            <div class = "input-box">
                <input name = "txtnome" type="text" placeholder = "Digite o seu nome" required>
                <box-icon type='solid' name='user'></box-icon>
            </div>

            <div class = "input-box">
                <input name = "txtsenha" type ="password"  onkeypress="return blokletras(window.event.keyCode)" placeholder = "Digite a sua senha" required>
            </div>
            <center>
            <button type = "submit" class = "btn" name = "btnconsultar">Login</button>
            </center>
        </form>

        <?php
        extract($_POST, EXTR_OVERWRITE);
        if(isset($btnconsultar))
        {
            include_once 'usuario.php';
            $u = new usuario();
            $u->setUsu($txtnome);
            $u->setSenha($txtsenha);
            $pro_bd = $u->logar();

            $existe = false;
            foreach($pro_bd as $pro_mostrar)
            {
                $existe = true;
                ?>
                    <br><b><center> <?php echo "Bem vindo! Usuário: ".$pro_mostrar[0]; ?></b><br><br></center>

                    <center>
                        <button type = "submit" class = "btn" name="btnentrar"><a href = "MenuBDProduto.html">Entrar</a></button>
                    </center>
                    <?php
            }
            if ($existe==false){
                header("location:loginInvalido.html");
            }
        }
        ?>
    </div>
</body>
<script src = "JS/blokletras.js"></script> 
</html>