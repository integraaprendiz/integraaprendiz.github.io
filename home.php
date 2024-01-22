<!DOCTYPE html>
<html lang="pt">

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

<!-- cabeçalho -->
<header class="cabecalho">
    <!-- logo -->
    <img class="logo" src="imagens\1.png" alt="">

    <!-- nome do projeto -->
    <h1 class="nomeProjeto">Integra Aprendiz</h1>

    <!-- botões de divulgação -->
    <nav class="cabecalho-nav">
        <ul class="cabecalho-lista">
            <li class="cab"><a target="_blank" href="https://www.pi.senac.br">Senac - PI</a></li>
            <li class="cab"><a target="_blank" href="https://www.instagram.com/a.turma118/">Os desenvolvedores</a></li>
        </ul>
    </nav>

</header>

<!-- Conteúdo principal -->
<main class="contPrincipal">
    <!-- conteúdo do video -->
    <div class="video">
        <img class="logoGrande" src="imagens/1.png" alt="Logo do projeto">
        <!-- <iframe src="https://www.youtube.com/embed/z08g9KBXWJ4?si=ZrTQwCWGRhvaKPEp&amp;start=60"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe> -->
    </div>
    <!-- conteúdo da descrição do video -->
    <div class="descricao">
        <h1>Projeto Integra Aprendiz</h1>
        <h2>Tem como objetivo a integração de novos colaboradores. Mas não se limita à apenas isso, pois funciona como um reforço para colaboradores que não conhecem a empresa e suas tecnologias a fundo. <br><br> Conheça nossa plataforma!</h2>

        <!-- botão principal -->
        <div class="bot">
            <!-- <button class="entrar">
                    <a class="linkBotao" href="http://localhost/integraaprendiz.github.io/login.php">login</a>
                    <a class="linkImagem" href="http://localhost/integraaprendiz.github.io/login.php"><img src="imagens\seta-direita.png" alt="seta"></a>
                </button>

                <a class="entrar" href="http://localhost/integraaprendiz.github.io/formulario.php">
                    <button class="entrar">
                        cadastre-se
                        <img src="imagens\seta-direita.png" alt="seta">
                    </button>
                </a> -->
            <a class="linklogin" href="login.php">
                <button class="butlogin">Login <img src="imagens\seta-direita.png" alt="#"></button>
            </a>

            <a class="linkform" href="formulario.php">
                <button class="butform">inscrever-se <img src="imagens\seta-direita.png" alt="#"></button>
            </a>
        </div>
    </div>

</main>

<!-- rodapé -->
<footer class="rodapeInd">
    <p>Site criado por <a target="_blank" href="https://www.instagram.com/josefilho_17/"><strong>José
                Aparecido</strong></a> e <a href="https://www.instagram.com/pedro_.manoel/"><strong>Pedro Manoel</strong></a> para o projeto integrador do curso de administração. <a target="_blank" href="https://www.instagram.com/a.turma118/"><strong>Turma 118</strong></a> / tarde</p>
</footer>
</body>

</html>