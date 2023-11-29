<?php
if (isset($_POST['submit'])) {
    // print_r($_POST['nome']);
    // print_r('<br>');
    // print_r($_POST['email']);
    // print_r($_POST['telefone']);
    // print_r($_POST['genero']);
    // print_r('<br>');
    // print_r($_POST['data_nascimento']);
    // print_r('<br>');
    // print_r($_POST['cidade']);
    // print_r('<br>');
    // print_r($_POST['estado']);
    // print_r('<br>');
    // print_r($_POST['endereco']);
    // print_r('<br>');
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES('$nome','$email','$senha','$telefone','$genero','$data_nascimento','$cidade','$estado','$endereco')");

    header('Location: login.php');
}



?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            display: inline;
            justify-content: center;
        }

        .box {
            color: white;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 15px;
            width: 60%;

        }

        fieldset {
            border: 3px solid dodgerblue
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 5px;

        }

        .inputbox {
            position: relative
        }

        .inputuser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            font-size: 15px;
            width: 60%;
            letter-spacing: 2px;

        }

        #datanascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
        }

        #submit {
            background-image: linear-gradient(to right, rgba(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 8px;

        }
    </style>
</head>

<body>
    <a href="index.html">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><br>Formulário de Clientes<br></legend>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>

                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">senha</label>

                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">telefone</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <div class="inputbox">
                    <label for="data_nascimento"><BR>DATA DE NASCIMENTO</BR></label>
                    <input type="date" name="data_nascimento" id="data_nascimento">
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>


</body>

</html>