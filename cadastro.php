<?php

include "./conexao.php";

if(isset($_POST['submit'])){
    if(strlen($_POST['user'])!= 0){
    }
    if(strlen($_POST['email'])!= 0){
    }
    if(strlen($_POST['password'])!= 0){
        $user = $mysqli->real_escape_string($_POST['user']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);
        $sql_add = "INSERT INTO usuario (user, email, password) VALUES ('$user', '$email', '$password')"; 
        $result = $mysqli->query($sql_add);
        if (!$result) {
            echo "Erro ao executar a consulta";
            exit();
        }
    }

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Faça seu Cadastro</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body{
        background-color: #383838;
    }
    .center-form {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .center{
        display: flex;
        padding: 5%;
        flex-direction: column;
        justify-content: center;
        width: 40%;
        height: auto;
        border-radius: 10px;
        background-color: white;
    }
    .form-group{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .icon{
        cursor: pointer;
    }
    .cds{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5em;
    }
  </style>
</head>
<body>
  <?php if(isset($_POST['submit'])): ?>
      <?php if(strlen($_POST['user']) == 0): ?>
      <div class="alert alert-danger" role="alert">
          Digite o seu usuário!
      </div>
      <?php endif; ?>
      <?php if(strlen($_POST['email']) == 0): ?>
      <div class="alert alert-danger" role="alert">
          Digite o seu email!
      </div>
      <?php endif; ?>
      <?php if(strlen($_POST['password']) == 0): ?>
      <div class="alert alert-danger" role="alert">
          Digite o sua senha!
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <div class="container">
    <form class="center-form" method="post" action="">
        <div class="center">
            <div class="form-group">
                <label for="" class = "cds">Cadastrar</label>
            </div>
            <div class="form-group">
                <label for="Usuário">Usuário:</label>
                <input type="text" class="form-control" placeholder="Digite seu usuário" name = "user">
              </div>
              <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" placeholder="Digite seu email" name = "email">
              </div>
              <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" name = "password">
              </div>
              <button class="btn btn-primary" name="submit">Cadastrar</button>
        </div>
    </form>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>