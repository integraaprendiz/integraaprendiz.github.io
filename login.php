<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/login/loginstyle.css">
    <title>Login</title>
    <style>
        body{
            
            font-family: Arial, Helvetica, sans-serif;
            background-image:linear-gradient(45deg, cyan,yellow);
            display: flex;
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
        button{
            background-color:  dodgerblue;
            border:none;
            padding: 15px;
            width: 15%;
            border-radius: 10px;
            color: aliceblue;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
    <div class="telalogin">
        <h1>Login</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button class="enviar">Enviar</button>
    </div>
</body>
</html>