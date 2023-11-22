<?php 

    class core
    {
        public function start($urlGet)
        {
            if (isset($urlGet['pagina'])) {
                $controller = lcfirst($urlGet['pagina'].'Controller');
            }else{
                $controller = 'homeController';
            }
            
            $acao = 'index';

            if(!class_exists($controller)){
                $controller = 'erroController';
            }
            call_user_func_array(array(new $controller, $acao), array());
        }
    }

?>