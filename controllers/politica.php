<?php
class Politica_Controller {

    public $template = 'politica/politica';

    public function main(array $getVars) {

        //Main
        if (count($getVars) == 0) {
            //telmplates
            $view = new View_Model($this->template);
            
            $view->render();
        }

    }
}