<?php 

    class aluno
    {
        public static function selecionaTodos()
        {
            $con = new PDO('mysql: host=localhost;dbname=escola;', 'root', '');
            var_dump($con);
        }
    }
    

?>