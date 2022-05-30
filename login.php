<?php
include('conexao.php');

if(isset($_POST['email']) || isset ($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
      echo "Preencha seu e-mail";
    }else if (strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha";
    } else {
  
        /*
        //função que limpa esse campo para segurança
      $email = $mysqli-> real_escape_string($_POST['email']);
      $senha = $mysqli-> real_escape_string($_POST['senha']);
      */
  
      $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die ("Falhaaaaa na execução do código SQL: ". $mysqli->error);
      
      $quantidade = $sql_query->num_rows;
      
      if($quantidade == 1){
  
        $usuario = $sql_query->fetch_assoc();
  
  if (!isset($_SESSION)) {
    session_start();
  }
        $_SESSION['id']=$usuario['id'];
        $_SESSION['nome']=$usuario['nome'];
  
        header("Location: index.php");

    } else {
        echo "Falha ao logar! E-mail ou senha incorretos";
  
    }
      
  }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto </title> 




    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        .login{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 15px;
            color: white;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
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
        }
    </style>
</head>
<body>

<form action="" method= "POST">

    <div class="login">
        <h1>Login</h1>

        

        <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
        <br><br>
        <div class="inputBox">
        <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
                <br>



        <button type="submit">Enviar</button>
        <nav>
            <ul>
                    <a href="registro.php">Registre-se</a>
            </ul>
        </nav>
    </div>
    </form>
</body>
</html>
