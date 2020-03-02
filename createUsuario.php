<?php 

require('funcoesusuarios.php');

session_start ();

$_SESSION ['id'] = 1;


//validar os posts
if($_POST){$inserirsenha = $_POST['senha'];
  $senha = password_hash($inserirsenha, PASSWORD_DEFAULT);
  $guardarsenhas = file_put_contents ('usuarios.json', $senha);
  
  
  // criar array de usuario - e depois os ifs de confirmação
  $usuario [
    $nome = $_POST['nomeUsuario'];
    $email = $_POST["email"];
    $senha = $_POST['senha'];
    $id = $_SESSION ['id'];
  ];
  
  //json 
  $usuario = json_encode ($usuario);
  $jsonUsuario = file_put_contents('usuarios.json', $usuario);
  }




// criar variaveis de erros para cada caso> criar ifs e emptys echo com mensagem de erro//  



?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Criar Usuário</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Desafio PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="createProduto.php">Adicionar produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuários</a>
      </li>
    </ul>
    <span class="navbar-text">
      Logout
    </span>
  </div>
</nav>


<div class="container">
    <h1>Criar Usuário</h1>
    <form method="post">
 
    <div class="form-group col-md-6">
      <label for="nomeUsuario">Nome </label>
      <input type="text" name="nomeUsuario" class="form-control" id="nomeUsuario" required>
    </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email" required>
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>

  <div class="form-group">
    <label for="incluirsenha">Senha</label>
    <input type="password" minlength='6' name="inserirsenha" class="form-control" id="incluirsenha" placeholder="Senha" enctype="multipart/form-data">
  </div>

  <div class="form-group">
    <label for="confirmarsenha"> Confirmar Senha</label>
    <input type="password" name="senhaConfirmar" class="form-control" id="confirmarsenha" placeholder=" Confirme sua Senha">
  </div>

  
    <input type="hidden" name="id" class="form-control" id="idUsuario">


<br> </br>

  <button  type="submit" class="btn btn-primary btn-lg btn-block">Adicionar</button>
  </form>
  </div>





    
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>