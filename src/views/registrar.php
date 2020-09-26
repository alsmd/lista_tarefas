<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#8257E5">
    <title>Lista de Tarefas</title>
    <!--ICONE-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../../public/css/normalize.css">
 
    <!--Estilo costumizado-->
    <link rel="stylesheet" href="../../public/css/partials/forms.css">
    <link rel="stylesheet" href="../../public/css/main.css">
    <link rel="stylesheet" href="../../public/css/partials/page-give-classes.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

</head>

<body id="page-give-classes" >

        <nav class="navbar navbar-expand-xl navbar-dark bg-dark mb-3 py-3" style="font-size:200%;">
            <div class="container">
                <a class="navbar-brand" href="#" style="font-size:2.1rem;">
                <img src="../../public/images/logo.png" width="40px" height="40px" alt="Aviso importante">
                Lista de Tarefas
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="font-size:1.5rem;">Logar</a>
                    </li>
                </ul>
                
                </div>
            </div>
        </nav>
    <div id="container">
 
            
        

        <main>
            
            <form id="create-class" method="POST" action="/save-classes">

<!--                 Dados pessoais
 -->            <fieldset >
                    <legend>Seus dados</legend>
                    
                    <!-- Nome --> 
                    <div class="input-block">
                        <label for="name" >Nome completo</label>
                        <input type="text" name="name" id="nome" required>
                    </div>

                    <!-- Foto -->
                    <div class="input-block">
                        <label for="avatar">Link da sua foto <small>(comece com https://)</small></label>
                        <input type="url" name="avatar" id="avatar" required>
                    </div>


                        <!-- email -->
                        <div class="input-block">
                        <label for="email">Email</label>
                        <input type="url" name="email" id="email" required>
                    </div>

                    <!-- senha -->
                    <div class="input-block">
                        <label for="senha">Senha</label>
                        <input type="url" name="senha" id="senha" required>
                    </div>


                </fieldset>



            </form>
            <footer>
                <p>
                    <img src="../../public/images/aviso.png" width="40px" height="40px" alt="Aviso importante">
                    Importante!<br>
                    Preencha todos os dados
                </p>
                <button type="submit" class="bg-info" form="create-class">salvar cadastro</button>
            </footer>

        </main>
    </div>
</body>
</html>