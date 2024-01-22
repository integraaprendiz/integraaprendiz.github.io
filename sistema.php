<?php
session_start();
print_r($_SESSION);
include_once('config.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) and (!isset($_SESSION['id']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
} else {
    $email = $_SESSION['email'];
    $sql = "SELECT nome FROM usuarios WHERE email='$email'";
    $result = $conexao->query($sql);
    $row = mysqli_fetch_assoc($result);
    $nome = $row['nome'];


    print_r($nome);
}








?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integra Aprendiz</title>
    <link rel="shortcut icon" href="imagens\1.png" type="image/x-icon">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        :root {
            --azulMaisClaro: #18C8FF;
            --azulclaro: #18A1CC;
            --azulMedio: #1D83A3;
            --azulescuro: #145A70;
        }

        @font-face {
            font-family: 'pacifico';
            src: url(fontes/Pacifico/Pacifico-Regular.ttf);
        }

        @font-face {
            font-family: 'roboto';
            src: url(fontes/Roboto_Mono/RobotoMono-VariableFont_wght.ttf)
        }

        @font-face {
            font-family: 'oxanium';
            src: url(fontes/Oxanium/Oxanium-VariableFont_wght.ttf);
        }


        body {
            background: linear-gradient(#000000, #4E4E4E);
            /* background: linear-gradient(rgb(225, 220, 220), rgb(141, 140, 140)); */
            height: 100vh;
        }

        .cabecalho {
            padding: 2px 0px;
            display: flex;
            justify-content: space-between;
            flex-grow: 50px;
            background-color: var(--azulescuro);
            align-items: center;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.526);
        }

        h1>a {
            text-decoration: none;
            color: white;
        }

        .logo {
            width: 44px;
            padding: 0 190px 0px 50px;
            border-radius: 50%;
        }

        .nomeProjeto {
            color: white;
            font-family: 'pacifico', sans-serif;
            font-weight: lighter;
            font-size: 1.5em;
        }

        .cabecalho-nav {
            font-family: 'roboto';
            font-weight: 300;
            font-size: 0.8em;
        }

        .cabecalho-lista {
            display: flex;
            padding: 0 50px;
            list-style: none;
            gap: 10px;
        }

        .cabecalho-lista>.cab:hover {
            transform: scale(1.1);
        }

        li>a {
            padding: 10px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 70px;
            font-size: 0.85em;
            font-weight: bold;
        }

        .contPrincipal {
            display: flex;
            margin: auto;
            min-width: 650px;
            max-width: 650px;
            /* width: 650px; */
            height: 300px;
            margin-top: 100px;
            box-shadow: 7px 7px 20px #00000057;
            background: linear-gradient(-110deg, var(--azulMedio), #048f8800 90%);
            border-radius: 7px;
        }

        .video,
        .descricao {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;
            color: rgb(8, 5, 0);
            min-width: 310px;
            height: 280px;
            margin: auto;
            padding: 10px;
        }

        .logoGrande {
            filter: drop-shadow(0px 0px 8px #0386d7ae);
        }

        .descricao h1 {
            font-family: 'pacifico';
            font-weight: 100;
            font-size: 1.7em;
            color: white;
            height: 20%;
            filter: drop-shadow(2px 2px 8px #000000bb);


        }

        h2 {
            height: 60%;
            font-size: 1em;
            font-weight: lighter;
            color: white;
            filter: drop-shadow(2px 2px 8px #000000bb);
        }

        .bot {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .butlogin,
        .butform {
            font-family: 'roboto', sans-serif;
            font-weight: bold;
            font-size: 0.8em;
            align-items: center;
            padding: 5px;
            border-radius: 7px;
            cursor: pointer;
            border-color: transparent;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.349);
        }

        .bot img {
            width: 9px;
        }

        .butlogin:hover {
            transform: scale(1.1);
        }

        .butform:hover {
            transform: scale(1.1);
        }

        .rodapeInd {
            background-color: var(--azulescuro);
            color: whitesmoke;
            bottom: 0;
            position: fixed;
            width: 100%;
            padding: 10px;
            text-align: center;
            font-family: 'oxanium';
            font-weight: 500;
            font-size: 0.7em;
        }

        p>a {
            color: whitesmoke;
            text-decoration: underline;
        }

        /* PLATAFORMA */

        #cursos {
            display: flex;
            flex-direction: column;
            background-color: #262626;
            width: 350px;
            height: 93.1vh;
        }

        #plataformaPrincipal {
            display: flex;
            flex-direction: row;
            height: 93vh;
            width: 100%;
        }

        .cursos {
            display: flex;
            flex-direction: column;
            max-width: 180px;

        }

        .lista {
            font-family: 'oxanium', sans-serif;
            font-size: 1em;
            color: white;
            font-weight: 500;
            background-color: var(--azulMedio);
            display: flex;
            flex-direction: row-reverse;
            padding: 10px 5px;
            cursor: pointer;
            border-color: transparent;
        }

        .cursos>button:hover {
            transform: scale(1.1);
            border-radius: 0px 5px 5px 0px;
            font-weight: bolder;
        }

        .cursosConteudo {
            margin: 10px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .cursosConteudos {
            border-radius: 7px;
            background: linear-gradient(90deg, #00000000, var(--azulescuro), var(--azulMedio));
            margin: 10px;
            display: flex;
            flex-direction: row;
        }

        .descricaoVideo {
            margin: 10px;
            text-indent: 5px;
            color: white;
        }
    </style>
</head>

<body>

<!-- alterações 1- colocar o nome do usuario e um botão para editar o cadasto -->
    <H1> PLATAFOMRA INTEGRA APRENDIZ </H1>

    <div class="sair">
        <a href="sair.php" class="button-sair">sair</a>
    </div>
    <div class="editar">
        <a href="editar.php">Editar Cadastro</a>
    </div>
    <?php

    echo "<H2>BEM-VINDO <u>$nome</u></H2>"

    ?>
    <header class="cabecalho">
        <img class="logo" src="imagens\1.png" alt="">

        <!-- nome do projeto -->
        <h1 class="nomeProjeto"><a href="sistema.php">Integra Aprendiz</a></h1>

        <!-- botões de divulgação -->
        <nav class="cabecalho-nav">
            <ul class="cabecalho-lista">
                <li><a target="_blank" href="https://www.pi.senac.br">Senac - PI</a></li>
                <li><a target="_blank" href="https://www.instagram.com/a.turma118/">Os desenvolvedores</a></li>
            </ul>
        </nav>
    </header>

    <main class="plataformaPrincipal" id="plataformaPrincipal">
        <div class="cursos" id="cursos">
            <button class="lista" data-target="#conteudoAdm">administração</button>
            <button class="lista" data-target="#conteudoInf">Informática</button>
            <button class="lista" data-target="#conteudoRh">RH / DP</button>
            <button class="lista" data-target="#conteudoLog">Logística</button>
            <button class="lista" data-target="#conteudoFin">Financeiro</button>
            <button class="lista" data-target="#conteudoMkt">Marketing</button>
        </div>
        <div id="conteudoAdm" class="cursosConteudo" style="display: none;">
            <div class="cursosConteudos">
                <div class="videoPrincipal">
                    <iframe width="250" src="https://www.youtube.com/embed/by9xhHq426c?si=9ykePvYmZmpVynV-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="descricaoVideo">
                    <p>Descrição: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, quod porro, aspernatur consequatur debitis iusto ducimus non et repellendus fugiat exercitationem. Laudantium, dolorum recusandae. Consequuntur ipsam a accusantium rem quam.</p>
                </div>
            </div>

            <div class="cursosConteudos">
                <div class="videoPrincipal">
                    <iframe width="250" src="https://www.youtube.com/embed/by9xhHq426c?si=9ykePvYmZmpVynV-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="descricaoVideo">
                    <p>Descrição: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, quod porro, aspernatur consequatur debitis iusto ducimus non et repellendus fugiat exercitationem. Laudantium, dolorum recusandae. Consequuntur ipsam a accusantium rem quam.</p>
                </div>
            </div>

            <div class="cursosConteudos">
                <div class="videoPrincipal">
                    <iframe width="250" src="https://www.youtube.com/embed/by9xhHq426c?si=9ykePvYmZmpVynV-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="descricaoVideo">
                    <p>Descrição: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis iure, aliquam dolor sit, placeat nesciunt magnam, ipsam dignissimos sequi sint rem! Aspernatur dolores veritatis delectus quae tempore rem nisi doloribus?</p>
                </div>
            </div>

        </div>

        <!-- conteudo de informática -->

        <div id="conteudoInf" class="cursosConteudo" style="display: none;">
            <div class="cursosConteudos">
                <div class="videoPrincipal">
                    <iframe width="250" src="https://www.youtube.com/embed/by9xhHq426c?si=9ykePvYmZmpVynV-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="descricaoVideo">
                    <p>Descrição: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, quod porro, aspernatur consequatur debitis iusto ducimus non et repellendus fugiat exercitationem. Laudantium, dolorum recusandae. Consequuntur ipsam a accusantium rem quam.</p>
                </div>
            </div>

            <div class="cursosConteudos">
                <div class="videoPrincipal">
                    <iframe width="250" src="https://www.youtube.com/embed/by9xhHq426c?si=9ykePvYmZmpVynV-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="descricaoVideo">
                    <p>Descrição: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, quod porro, aspernatur consequatur debitis iusto ducimus non et repellendus fugiat exercitationem. Laudantium, dolorum recusandae. Consequuntur ipsam a accusantium rem quam.</p>
                </div>
            </div>

            <div class="cursosConteudos">
                <div class="videoPrincipal">
                    <iframe width="250" src="https://www.youtube.com/embed/by9xhHq426c?si=9ykePvYmZmpVynV-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="descricaoVideo">
                    <p>Descrição: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis iure, aliquam dolor sit, placeat nesciunt magnam, ipsam dignissimos sequi sint rem! Aspernatur dolores veritatis delectus quae tempore rem nisi doloribus?</p>
                </div>
            </div>

        </div>
    </main>

    <footer>

    </footer>

    <script type="text/javascript" src="plataforma.js">



    </script>






</body>

</html>