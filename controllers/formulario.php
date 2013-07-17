<?php
class Formulario_Controller {

    public $template = 'formulario/formulario';

    public function main(array $getVars) {

        #$Cadastrar_cv_Model = new Cadastrar_cv_Model();
        #$Cadastrar_Empresa_Model = new Cadastrar_Empresa_Model();
        $Email = new Email_Controller();
        
        /*
        * 
        * ************* CADASTRO *************
        * 
        */
        //(insert)
        if (isset($getVars['Contato']) && !empty($getVars['Contato']) &&
                isset($getVars['Telefone']) && !empty($getVars['Telefone']) &&
                isset($getVars['Email']) && !empty($getVars['Email']) &&
                isset($getVars['Modelo']) && !empty($getVars['Modelo'])){

            $Retorno = $Email->Enviar_Consulta_Marca($getVars['Empresa'], $getVars['CNPJ'], 
                    $getVars['Ramo'], $getVars['Contato'], $getVars['Telefone'], $getVars['Celular'], 
                    $getVars['Email'], $getVars['Duvidas'], $getVars['Modelo'], $getVars['Marca1'], $getVars['Marca2'], $getVars['Marca3'], 
                    $getVars['Marca4'], $getVars['Marca5'], $getVars['Marca6'], $getVars['Marca7'],
                    $getVars['Marca8']);

            echo $Retorno;
        }

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