<?php 
    /*
		Desenvolvido por: Thiago Arcanjo de Oliveira
		Email:thiagokai.arcanjo@gmail.com
		Data Ultima Att: 18/04/2022
		Resumo: Objeto Upa;
	*/

    class Upa{
        private $id;
        private $nome;
        private $descricao;

        public function __construct(){
            
        }

        //getters And setters;
        //getters
        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getDescricao(){
            return $this->descricao;
        }
    }
?>