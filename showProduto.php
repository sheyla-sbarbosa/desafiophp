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
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laranja</td>
      <td>Laranja Lima por kilo </td>
      <td>12</td>
      <td> <a class="btn btn-primary btn-sm" href="#" role="button">Editar</a>
      <a class="btn btn-danger btn-sm" href="#" role="button">Excluir</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Banana</td>
      <td>Banana da Terra por kilo</td>
      <td>10</td>
      <td> <a class="btn btn-primary btn-sm" href="#" role="button">Editar</a>
      <a class="btn btn-danger btn-sm" href="#" role="button">Excluir</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Siricuela</td>
      <td>Siricuela - fruta do nordeste  por kilo</td>
      <td>6</td>
      <td> <a class="btn btn-primary btn-sm" href="#" role="button">Editar</a>
      <a class="btn btn-danger btn-sm" href="#" role="button">Excluir</a></td>
    </tr>
  </tbody>
</table>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>