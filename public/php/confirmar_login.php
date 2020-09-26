<?php 
    $contas = fopen('../../src/database/contas.hd','a+');
    $acesso = false;
    $id = null;
    while(!(feof($contas))){
        $conta_armazenada = fgets($contas);
        if($conta_armazenada !=''){
            $conta_armazenada = json_decode($conta_armazenada);
            if($conta_armazenada->email == $_POST['email'] && $conta_armazenada->senha == $_POST['senha']){
                $acesso = true;
                $id = $conta_armazenada->id;
            }
        }
    }
    if($acesso){
        session_start();
        $_SESSION['id'] = $id;
        header('Location: ../../src/views/home.php');
    }else{
        echo 'negado';
        header('Location: ../../src/views/index.php?login=nao');

    }

?>