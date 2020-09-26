<?php 
    session_start();
    //tratando tarefa
    foreach($_POST as $i => $dado){
        $_POST[$i] = str_replace("#","-",$_POST[$i]);
    }

    //recupera o id da conta logada no momento e armazena a tarefa no arquivo correspondente ao id
    $id =$_SESSION['id'];
    $tarefa = implode("#",$_POST).PHP_EOL;
    echo $tarefa;
    $id = trim($id);
    $tarefas = fopen("../../src/database/dados/$id.hd",'a');
    fwrite($tarefas,$tarefa);
    fclose($tarefas);




?>