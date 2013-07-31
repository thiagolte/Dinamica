<?php
class Etapas_Controller {

    public $template = 'etapas/etapas';

    public function main(array $getVars) {

        //Main
        if (count($getVars) == 0) {
            //telmplates
            $view = new View_Model($this->template);
            $view->render();
        }

    }
}