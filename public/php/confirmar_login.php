<?php 

    $contas = fopen('../../src/database/contas.hd','a+');
    $acesso = false;
    $id = null;
    print_r($_POST);
    while(!(feof($contas))){
        $conta_armazenada = fgets($contas);
        if($conta_armazenada !=''){
            $conta_armazenada = explode('#',$conta_armazenada);
            if($conta_armazenada[2] == $_POST['email'] && $conta_armazenada[3] == $_POST['senha']){
                $acesso = true;
                $id = $conta_armazenada[4];
            }
        }
    }
    echo $id;
    if($acesso){
        session_start();
        $_SESSION['id'] = $id;
        header('Location: ../../src/views/home.php');
    }else{
        echo 'negado';
        header('Location: ../../src/views/index.php?login=nao');

    }

?>