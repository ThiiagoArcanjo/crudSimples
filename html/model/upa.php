<?php 
    include_once("conexao.php");

    class Upa{
        private $id_upa;
        private $nome;
        private $descricao;
        private $conexao;

        public function __construct(){
            $conexao = new Conexao();
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

        /* CRUD */
        public function cadastrar(){
            $conexao = new Conexao();
            $con = $conexao->conectar();
            $stmt =  $con->prepare("INSERT INTO upa(nome, descricao) VALUES(:nome, :descricao)");

            $stmt->bindParam(":nome", $this->nome);
            $stmt->bindParam(":descricao", $this->descricao);

            $stmt->execute();

        }

        public function alterar(){

        }

        public function excluir(){

        }

        public function buscarTodos(){

        }

        public function buscarPorId(){

        }
    }
?>