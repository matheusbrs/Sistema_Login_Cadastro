<?php

include_once("logar.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            background-color: antiquewhite;
        }

        #imagem {
            border: solid 1px black;
            height: 220px;
            width: 225px;
           
        }

        #login {
            border: solid 1px blue;
            height: 220px;
            width: 225px;
            background-color: bisque;
            
        }

        #principal {
            margin-left: 35%;
            margin-top: 5%;
            position: absolute;
            
           

        }

        #lg {
            text-align: center;
            margin-top: 12%;

        }
        #bnt1{
           
           
          
            border-radius:10%;
            background-color: orange;
            font-size: 15px;
        }
        .bnt{
            margin-left: 90%;
            position: absolute;
            margin-top: 5%;
            border-radius:10%;
            background-color: orange;
            font-size: 6px;
        }

        #nm{
            position: absolute;
            margin-left: 2%;
            font-size: 25px;
            color: orange;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>

<body>






<div>
    <div id="nm">
       <a href="./index.php"><h1>Smart Tec</h1></a> 
    </div>
</div>

    <form action="logar.php" method="POST">
        <div id="principal">
            <div id="imagem">
                <img src="img/pc.jpg" alt="">
            </div>
            <div id="login">
                <div id="lg">
                    <h2>Login</h2>
                    <label for="">Usuario</label><br>

                    <input type="text" name="email" placeholder=" email"><br>
                    <label for="">Senha</label><br>
                    <input type="password" name="senha" placeholder="Senha"><br><br>
                    <input id="bnt1" type="submit" name="acessar" value="Acessar" >

                </div>
            </div>
        </div>
    </form>

    <div class="bnt">
        <div>
            <button class="bnt"> <a  href="cadastro.php"><h1>Cadastrar</h1> </a></button>
        </div>
    </div>
    

    
    
    
</body>

</html>