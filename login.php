<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            
            font-family: Arial, Helvetica, sans-serif;
            background-image:linear-gradient(45deg, cyan,yellow);
            display:inline;
            justify-content: center;
            
        
           
            
        }
        .telalogin{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            width: 70%;
            height: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            
           
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 7px;
        }
        .inputSubmit{
            background-color:  dodgerblue;
            border:none;
            padding: 15px;
            width: 15%;
            border-radius: 10px;
            color: aliceblue;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
    <a href="index.html">Voltar</a>
    <div class="telalogin">
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>