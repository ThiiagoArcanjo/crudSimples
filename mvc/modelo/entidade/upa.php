<?php 
    /*
		Desenvolvido por: Thiago Arcanjo de Oliveira
		Email:thiagokai.arcanjo@gmail.com
		Data Ultima Att: 18/04/2022
		Resumo: Objeto Upa;
	*/

    class Upa{
        private $id_upa;
        private $nome;
        private $descricao;

        public function __construct(){
            
        }

        //getters And setters;
        //getters
        public function getId_Upa(){
            return $this->id_upa;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        //setters
        public function setId_Upa($id_upa){
            $this->id_upa = $id_upa;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
    }
?>