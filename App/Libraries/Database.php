<?php
class Database{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "blogaula";
    private $porta = "3306"; //verificar a porta do seu banco
    private $dbh;

    public function __construct(){
        //fonte de dados ou DNS que contém as informações para conectar ao banco de dados.
        $dns  = 'mysql:host='.this->host.';port='.this->porta.';dbname='.$this->banco;


        $opcoes = [
            //armazenar em cache a conexão para ser reutilizada, evitando sobrecarga de uma nova conexão.
            PDO::ATTR_PERSISTENT => true,
            // lança um PDOException se ocorrer um erro
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTIOM
        ];
        try{
            //cria a instancia do PDO
            $this->dbh = new PDO($dns, $this->usuario, $this->senha, $opcoes)
        }catch(PDOException $error){
            print "Error!";$error->getMessage()."<br/>";
            die();
        }//fim do catch

    }//fim do metodo construtor
}