<?php 


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Adicionar Produtos</title>
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
    <form>
 
    <div class="form-group col-md-6">
      <label for="nomeUsuario">Nome </label>
      <input type="text" name="nomeUsuario" class="form-control" id="nomeUsuario">
    </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>

  <div class="form-group">
    <label for="incluirsenha">Senha</label>
    <small id="senhaHelp" class="form-text text-muted">Minímo de 6 caracteres.</small>
    <input type="password" name="senha" class="form-control" id="incluirsenha" placeholder="Senha">
    
  </div>

  <div class="form-group">
    <label for="confirmarsenha"> Confirmar Senha</label>
    <input type="password" name="senha" class="form-control" id="confirmarsenha" placeholder=" Confirme sua Senha">
  </div>


<br> </br>

  <button  type="submit" class="btn btn-warning btn-lg btn-block">Editar</button>
  </form>
  </div>





    
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>