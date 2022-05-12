<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        .registro{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
        a{
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="registro">
        <h1>Registro</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="text" placeholder="Sobrenome">
        <br><br>
        <input type="text" placeholder="Email">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>Enviar</button>
    </div>
</body>
</html>