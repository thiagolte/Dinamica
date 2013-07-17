<?php
class Pagamento_Controller {

    public $template = 'pagamento/pagamento';

    public function main(array $getVars) {

        //Main
        if (count($getVars) == 0) {
            //telmplates
            $view = new View_Model($this->template);
            $vw_Login = new View_Model('login/login');
            $view->assign('vw_Login', $vw_Login->render(false));
            $view->assign('Metodo', 'Cadastrar CV');

            $view->render();
        }

    }

}