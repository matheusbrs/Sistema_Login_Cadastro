<?php 
include_once("testeconecta.php")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        body
        {
            background-color: orange;
        }
        #principal {
            background-color: white;
            border: solid 1px black;
            width: 80%;
            height: 590px;
            margin-left: 10%;
            margin-top: 5%;
            position: absolute;
        }

        #cabecalho {
            border: solid 1px blue;
            width: 100%;
            background-color: antiquewhite;
        }

        .formulario {
            height: 30px;
        }

        #endereco {
            border: solid 1px blue;
            width: 100%;
            background-color: antiquewhite;
            text-align: center;
        }
        .bnt{
            font-size: 100%;
            margin-left:45% ;
            margin-top: 5%;
            border-radius:10%;
            background-color: orange;
         
        }
        .titulos{
            font-size: 20px;
        }
        #bnt_login
        {
            margin-left: 90%;
            position: absolute;
        }

    </style>
</head>

<body>
    <form method="POST">
        <div id="principal">
            <div id="cabecalho">
                <h3 style="text-align: center;">Preencha com suas informações pessoais</h3>
            </div>
            <div>
                <br><br>
                <label class="titulos" style=" margin-left: 40%; " for="">Nome</label><br>
                <input style="width: 80%; height:30px; text-aling:center; margin-left:10%;" type="text" name="nome" placeholder="Insira seu nome completo aqui "><br><br>
                <label class="titulos"  style="margin-left: 4%; " for="">Cpf</label>
                <input class="formulario" placeholder="Cpf" name="cpf"> &nbsp; &nbsp;
                <label  class="titulos"  for="">Data de Nascimento</label>
                <input class="formulario" type="date" placeholder="Cpf" name="data_nascimento"> &nbsp; &nbsp;
                <label class="titulos"  for="">sexo</label>
                <input type="radio" placeholder="Cpf" name="sexo">
                <label class="titulos"  for="">Masculino</label>
                <input type="radio" placeholder="Cpf" name="sexo">
                <label class="titulos" for="">Feminino</label> <br><br>
                <label class="titulos"  style="width: 80%; height:30px; margin-left:4%;" for="">E-mail</label>
                <input class="formulario" type="email" placeholder="E-mail" name="email">
                <label class="titulos"  style="width: 80%; height:30px; margin-left:4%;" for="">Senha</label>
                <input class="formulario" type="password" placeholder="Senha" name="Senha">&nbsp;&nbsp;&nbsp;
                <label class="titulos"  for="">Estado Civil</label>
                <select class="formulario" name="estado_civil" id="cars">
                    <option value="volvo">Solteiro</option>
                    <option value="saab">Casado</option>
                    <option value="mercedes">Viuvo</option>
                    <option value="audi">Divorciado</option>
                </select><br><br>
                <h1 id="endereco">Endereço</h1>
                <label class="titulos"  style=" margin-left: 40%; " for="">Logradouro</label><br>
                <input style="width: 80%; height:30px; text-aling:center; margin-left:10%;" type="text" name="logradouro" placeholder="Logradouro "><br><br>
                <label class="titulos"  style="margin-left: 4%; " for="">Número</label>
                <input class="formulario" placeholder="Nº " name="numero_casa"> &nbsp; &nbsp;
                <label class="titulos"  for="">Complemento</label>
                <input class="formulario" type="TEXT" placeholder="Complemento" name="complemento"> &nbsp; &nbsp;
                
                <label class="titulos"  style="width: 80%; height:30px; margin-left:4%;" for="">Cidade</label>
                <input class="formulario" type="text" placeholder="Cidade" name="cidade">
              
                <button name="cadastrar" class="bnt" ><link rel="stylesheet"  href="">Cadastrar</button>

            </div>
        </div>
    </form>
    <div id="bnt_login">
        <button class="bnt"><a  href="./login.php"> login</a></button>
    </div>
</body>

</html>