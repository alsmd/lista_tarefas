<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8257E5">
    <title>Lista de Tarefas--Concluidas</title>
    <!--ICONE-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="Css/normalize.css">
	<!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->

    <!--Estilo costumizado-->
    <link rel="stylesheet" href="../../public/css/partials/forms.css">
    <link rel="stylesheet" href="../../public/css/partials/header.css">
    <link rel="stylesheet" href="../../public/css/partials/page-study.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    
    
</head>
<body id="page-study">
    
    <div id="container">
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
            <li class="nav-item active">
              <a class="nav-link" href="consultar.php">Consultar</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="concluidas.php">Concluidas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../public/php/sair.php">Sair</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
 
        <header class="page-header bg-info">
            <div class="header-content bg-info">
                <strong>Tarefas a serem concluidas</strong>

                <form id="search-teachers">

                    <div class="input-block">
                        <label for="subject">Nome</label>
                        <input type="text" name="nome" id='nome'>
                        </select>
                    </div>

                    <div class="select-block">
                        <label for="tipo">Tipo</label>
                        <select name="tipo" id="tipo" >
                            <option value="" disabled="">Selecione uma opção</option>
                            
                            <option>Trabalho</option>
                          <option>Lazer</option>
                          <option>Necessidade</option>
                          <option>Saúde</option>
                          <option>Outro</option>
                            

                        </select>
                    </div>

                    <button type="submit" class="bg-info">Filtrar</button>
    
                </form>
            </div>
            

        </header>

        <main>

            <article class="teacher-item">
                <header>
                    <img 
                        src= "" alt="">
                    <div>
                        <strong>Nome da Tarefa</strong>

                    </div>
                </header>
            
                <p>descrição</p>
                <p></p>
                <footer>
                    <p>Vencimento<strong>Dia</strong>
                    </p>

                    <a href="">

                       Concluir tarefa
                    </a>


                </footer>
            </article>



           
            <p class="no-results"> Nenhuma tarefa encontrado com a sua pesquisa</p>





        
         
        </main>



    </div>
    
        


    




</body>
</html>