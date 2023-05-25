<?php

include "./conexao.php";

if(isset($_POST['submit'])){
    $user = $mysqli->real_escape_string($_POST['user']);
    $password = $mysqli->real_escape_string($_POST['password']);

    $sql_verification = "SELECT * FROM usuario WHERE user = '$user' and password = '$password' ";
    $sql_query = $mysqli->query($sql_verification) or die();

    $quantidade = $sql_query->num_rows;
    
    if($quantidade == 1){
        
        $usuario = $sql_query->fetch_assoc();
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['user'] = $usuario['user'];

        header("Location: tela.php");
    }else{
        echo "Falha ao logar";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Faça seu login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body{
        background-color: #383838;
    }
    .img-fluid{
        width: 90%;
        height: 90%;
        border-radius: 10px;
    }
    img{
        width: 50px;
    }
    .center-form {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .center{
        display: flex;
        padding: 10px;
        flex-direction: column;
        justify-content: center;
        width: 90%;
        height: 90%;
        border-radius: 10px;
        background-color: white;
    }
    .form-group{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
    }
    .icons{
        display: flex;
        justify-content: space-around;
        padding: 10px;
        margin-top: 20px;
    }
    .icon-user{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 200px;
        cursor: pointer;
    }
    .second-img{
        display: flex;
        justify-content: center;
    }
    button{
        margin-top: 50px;
    }
    .icon{
        cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
  <?php if(isset($_POST['submit'])): ?>
      <?php if(strlen($_POST['user']) == 0): ?>
      <div class="alert alert-danger" role="alert">
          Digite o seu usuário!
      </div>
      <?php endif; ?>
      <?php if(strlen($_POST['password']) == 0): ?>
      <div class="alert alert-danger" role="alert">
          Digite o sua senha!
      </div>
      <?php endif; ?>
    <?php endif; ?>
    <form class="center-form" method="post" action="">
        <img src="./imagens/pexels-harsch-shivam-2007647 (1).jpg" class="img-fluid" alt="Descrição da imagem">
        <div class="center">
            <div class="second-img">
                <img src="./imagens/vecteezy_user-icon-in-trendy-flat-style-isolated-on-grey-background_.jpg" alt="" class="icon-user">
            </div>
            <div class="form-group">
                <label for="Usuário">Usuário:</label>
                <input type="text" class="form-control" placeholder="Digite seu usuário" name = "user">
              </div>
              <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" name = "password">
              </div>
              <div class="icons">
                <img src="./imagens/facebook.png" alt="" class="icon">
                <img src="./imagens/instagram.png" alt="" class="icon">
                <img src="./imagens/google.png" alt="" class="icon">
              </div>
              <button class="btn btn-primary" name="submit">Entrar</button>
        </div>
    </form>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>