<?php
class Quemsomos_Controller {

    public $template = 'quemsomos/quemsomos';

    public function main(array $getVars) {

        //Main
        if (count($getVars) == 0) {
            //telmplates
            $view = new View_Model($this->template);
            $view->render();
        }

    }
}