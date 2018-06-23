<!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Sistema de Controle de  Estacionamento</title>
    <link rel="stylesheet" type="text/css" href="/estacionamento/lib/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/estacionamento/lib/dist/css/style.css">
    <script src="/estacionamento/lib/dist/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
 <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/estacionamento/">Rick Parking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cadastros
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/estacionamento/classes/controllers/teste_controller.php">Teste</a>
            <a class="dropdown-item" href="/estacionamento/classes/controllers/tipo_veiculo_controller.php">Tipo Veiculo</a>
            <a class="dropdown-item" href="/estacionamento/classes/controllers/marca_controller.php">Marcas</a>
            <a class="dropdown-item" href="#">Tabela de Preços</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Administração
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/estacionamento/classes/controllers/usuario_controller.php">Cadastro de Usuários</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Relatório de Carros no Estacionamento</a>
            <a class="dropdown-item" href="#">Relatório de locações por período</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Relatório Financeiro</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>