<?php 

    class homeController{
        public function index()
        {
            Aluno::selecionaTodos();
        }
    }

?>