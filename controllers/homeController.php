<?php
class homeController extends controller {

    public function index() {
        $dados = array();
        $livros = new Livros();
        $dados['lista'] = $livros->getAll();
        
        $this->loadTemplate('home', $dados);
    }

}