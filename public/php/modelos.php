<?php
    class Usuario
    {
        public $nome = null;
        public $avatar = null;
        public $email = null;
        public $senha = null;
        public $id = null;
        public function setAttr($nome,$avatar,$email,$senha,$id)
        {
            $this->nome = $nome;
            $this->avatar = $avatar;
            $this->email = $email;
            $this->senha = $senha;
            $this->id = $id;
        }
    }
    class Tarefa
    {
        public $titulo = null;
        public $tipo = null;
        public $descricao = null; 
        public function setAttr($titulo,$tipo,$descricao)
        {
            $this->titulo = $titulo;
            $this->tipo = $tipo;
            $this->descricao = $descricao;
        }
    }


?>

