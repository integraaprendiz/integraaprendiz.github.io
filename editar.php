<?php
session_start();
include_once('config.php');
if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
} else {
    $mensagem = "";
    $nome = "";
    $email = "";
    $senha = "";
    $sexo = "";
    $data_nasc = "";
    $trabalho = "";
    $empresa = "";
}

// Verifica se 'email' está definido na sessão
if (!isset($_SESSION['email'])) {
    echo "O 'email' não está definido na sessão.";
    exit();
}

// Obtém 'email' da sessão
$email = $_SESSION['email'];

// Inicializa a mensagem de sucesso


// Consulta SQL para obter nome e email do usuário usando o email
$sql = "SELECT nome,email,senha,sexo,data_nasc,trabalho,empresa FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $nome = $row['nome'];
    $email = $row['email'];
    $senha = $row['senha'];
    $sexo = $row['sexo'];
    $data_nasc = $row['data_nasc'];
    $trabalho = $row['trabalho'];
    $empresa = $row['empresa'];
} else {
    // O usuário não foi encontrado
    echo "Usuário não encontrado.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtendo os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $trabalho = $_POST['trabalho'];
    $empresa = $_POST['empresa'];





    // Atualizando as informações no banco de dados
    $sql = "UPDATE usuarios SET nome='$nome', senha='$senha', sexo='$sexo', data_nasc='$data_nasc', trabalho='$trabalho', empresa='$empresa' WHERE email='$email'";
    mysqli_query($conexao, $sql);

    // Definindo a mensagem de sucesso
    $mensagem = "ALTERAÇÃO FEITA COM SUCESSO";


    // Adiciona a mensagem à sessão
    $_SESSION['mensagem'] = $mensagem;

    // Redireciona para a mesma página
    header("Location: editar.php");
    exit();
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
    <a href="sistema.php">Voltar</a>
    <?php
    // Exibe a mensagem de sucesso, se houver
    if (!empty($mensagem)) {
        echo "<script>alert('$mensagem');</script>";
    }
    ?>





    <form action="editar.php" method="post">
        <fieldset>
            <legend><br>Editar Cadastro<br></legend>
            <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome; ?>">
                <label for="nome" class="labelinput">Nome completo</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email; ?>" readonly>
                <label for="email" class="labelinput">Email</label>

            </div>
            <br><br>
            <div class="inputbox">
                <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha; ?>" onclick="mostrarSenha()">
                <label for="senha" class="labelinput">senha</label>

            </div>
            <p>Sexo:</p>
            <input type="radio" id="feminino" name="genero" value="feminino" value="<?php echo $sexo; ?>">
            <label for="feminino">Feminino</label>
            <input type="radio" id="masculino" name="genero" value="masculino" value="<?php echo $sexo; ?>">
            <label for="masculino">Masculino</label>
            <input type="radio" id="outro" name="genero" value="outro" value="<?php echo $sexo; ?>">
            <label for="outro">Outro</label>
            <div class="inputbox">
                <label for="data_nascimento"><BR>DATA DE NASCIMENTO</BR></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc; ?>">
            </div>
            <br><br>
            <p>está trabalhando:</p>
            <input type="radio" id="sim" name="trabalho" value="sim" value="<?php echo $trabalho; ?>">
            <label for="sim">Sim</label>
            <input type="radio" id="nao" name="trabalho" value="nao" value="<?php echo $trabalho; ?>">
            <label for="nao">Não</label>

            <div class="inputbox">
                <input type="text" name="empresa" id="empresa" class="inputUser" value="<?php echo $empresa; ?>">
                <label for="empresa" class="labelinput">Nome da empresa caso esteja trabalhando</label>
            </div>

            <input type="submit" id='submit'value="Salvar">
        </fieldset>


    </form>





    <script>
        function mostrarSenha() {
            var senhaInput = document.getElementById("senha");
            if (senhaInput.type === "password") {
                senhaInput.type = "text";
            } else {
                senhaInput.type = "password";
            }
        }
    </script>


</body>

</html>