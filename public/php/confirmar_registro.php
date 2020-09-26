<?php

    //Id dinamico
    function idDinamico(){
        $id_src = '../../src/database/id.hd';
        $id_arquivo = fopen($id_src,'a+');
        $id = fgets($id_arquivo) + 1;
        fclose($id_arquivo);
        $id_arquivo = fopen($id_src,'w');
        fwrite($id_arquivo,$id);
        fclose($id_arquivo);
        return $id;
    }
    //tratar conta
    foreach($_POST as $i => $dado){
        $_POST[$i] = str_replace("#","-",$dado);
    }
    //validando cadastro
    $contas = fopen('../../src/database/contas.hd','a+');
    $acesso = true;
    //verifica se o email ja esta cadastrado
    while(!(feof($contas))){
        $conta_armazenada = fgets($contas);
        if($conta_armazenada !=''){
            $conta_armazenada = explode('#',$conta_armazenada);
            if($conta_armazenada[2] == $_POST['email']){
                $acesso = false;
            }
        }
    }
   
    //confirmando ou rejeitando cadastro
    if($acesso == true){
        $id = idDinamico();
        $conta = implode("#",$_POST) . '#'.$id.PHP_EOL;
        fwrite($contas,$conta);
        header('Location: ../../src/views/index.php?acesso=sim');
    }else {
        echo 'não cadastrou';
        header('Location: ../../src/views/index.php?acesso=nao');
    }
    fclose($contas);
?>