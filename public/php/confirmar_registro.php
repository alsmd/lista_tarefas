<?php
    require("modelos.php");


    $id_src = '../../src/database/id.hd';
    $id_arquivo = fopen($id_src,'a+');
    $id = fgets($id_arquivo) + 1;
    fclose($id_arquivo);
    $id_arquivo = fopen($id_src,'w');
    fwrite($id_arquivo,$id);
    fclose($id_arquivo);


    //tratar conta
    $usuario = new Usuario();
    $usuario->setAttr($_POST['name'],$_POST['avatar'],$_POST['email'],$_POST['senha'],$id);
    $usuario_json = json_encode($usuario).PHP_EOL;

    //validando cadastro
    $contas = fopen('../../src/database/contas.hd','a+');
    $acesso = true;
    //verifica se o email ja esta cadastrado
    while(!(feof($contas))){
        $conta_armazenada = fgets($contas);
        if($conta_armazenada !=''){
            $conta_armazenada = json_decode($conta_armazenada);
            if($conta_armazenada->email == $_POST['email']){
                $acesso = false;
            }


        }
    }
   
    //confirmando ou rejeitando cadastro
    if($acesso == true){
        fwrite($contas,$usuario_json);
        fclose($contas);
        header('Location: ../../src/views/index.php?acesso=sim');
    }else {
        echo 'não cadastrou';
        fclose($contas);
        header('Location: ../../src/views/index.php?acesso=nao');
    }
    
?>