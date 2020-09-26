<?php 
    session_start();
    //tratando tarefa
    foreach($_POST as $i => $dado){
        $_POST[$i] = str_replace("#","-",$_POST[$i]);
    }
    $id =$_SESSION['id'];
    $tarefa = implode("#",$_POST).PHP_EOL;
    echo $tarefa;
    $id = trim($id);
    $tarefas = fopen("../../src/database/dados/$id.hd",'a');
    fwrite($tarefas,$tarefa);
    fclose($tarefas);




?>