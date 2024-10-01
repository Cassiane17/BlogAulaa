<?php
class Paginas extends Controller{
    public function index(){
      $dados = ['titulo'=>'Pagina Inicial',
                 'descricao'=> 'Aula de PHP'
               ];
        $this->view('pagina/home', $dados);
    }
    public function sobre(){
      $dados = ['titulo'=>'Sobre nós...',
                'descricao'=>'Esta aula é sobre PHP 
                 orientado a objetos com MVC'];
     $this->view('pagina/sobre', $dados);
    }

}//fim da classe Paginas

?>