<?php
class Saibamais_Controller {

    public $template = 'saibamais/saibamais';

    public function main(array $getVars) {

        //Main
        if (count($getVars) == 0) {
            //telmplates
            $view = new View_Model($this->template);
            $view->render();
        }

    }
}