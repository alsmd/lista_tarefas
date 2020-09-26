<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>Lista de Tarefas</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

</head>
      
  <body>

  <nav class="navbar navbar-expand-xl navbar-dark bg-dark mb-3">
      <div class="container">
        <a class="navbar-brand" href="#">
        <img src="../../public/images/logo.png" width="40px" height="40px" alt="Aviso importante">
           Lista de Tarefas
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="registrar.php">Registrar</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha" name="senha"> 
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>