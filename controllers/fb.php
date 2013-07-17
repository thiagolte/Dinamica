<?php

class Fb_Controller {

    public $template = 'fb/fb';

    public function main(array $getVars) {
        
        $Funcoesbasicas = new Funcoesbasicas_Controller();
        
        if (isset($getVars['act']) && !empty($getVars['act'])){
            //telmplates
            $view = new View_Model($this->template);

            $vw_Login = new View_Model('login/login');
            $view->assign('vw_Login', $vw_Login->render(FALSE));
            
            $view->render();
        }
        
        
        //Main
        if (count($getVars) == 0) {
            //telmplates
            $view = new View_Model($this->template);

            $vw_Login = new View_Model('login/login');
            $view->assign('vw_Login', $vw_Login->render(FALSE));
            
            $view->render();
        }
            
    }
}