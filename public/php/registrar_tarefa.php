<?php 
    require "modelos.php";
    session_start();
    //tratando tarefa
    $tarefa = new Tarefa();
    $tarefa->setAttr($_POST['titulo'],$_POST['tipo'],$_POST['descricao']);
    $tarefa_json = json_encode($tarefa).PHP_EOL;

    //recupera o id da conta logada no momento e armazena a tarefa no arquivo correspondente ao id
    $id =$_SESSION['id'];
    $id = trim($id);
    $tarefas = fopen("../../src/database/dados/$id.hd",'a');
    $acesso = fwrite($tarefas,$tarefa_json);
    fclose($tarefas);

    if($acesso){
        header("Location: ../../src/views/cadastro.php?cadastro=sim");
    }

?>