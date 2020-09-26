<?php 
  session_start();
  if(!(isset($_SESSION['id']))){
    header("Location: index.php");
  } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8257E5">
    <title>Lista de Tarefas</title>
    <!--ICONE-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../../public/css/normalize.css">
	<!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->


    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    
    <style>
        body,html {
            width: 100vw;
            height: 100vh;
        }
        #banner {
            margin:0 auto;
            width:87%;
            height:87%;
 }
        #banner img {
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
    
   

    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="home.php">
        <img src="../../public/images/logo.png" width="40px" height="40px" alt="Aviso importante">
           Lista de Tarefas
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consultar.php">Consultar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="concluidas.php">Concluidas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../public/php/sair.php">Sair</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    
  
    <div id='banner'>
    <img src="../../public/images/banner.jpg" alt="">


    </div>

    




</body>
</html>