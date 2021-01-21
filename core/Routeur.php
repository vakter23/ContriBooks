<?php
require_once('core/View.php');
session_start();
class Routeur
{
    private $_ctrl;
    private $_view;

    public function routeReq()
    {
        try
        {
            //Chargement automatique des classes
            spl_autoload_register(function($class){
                if($class=='Model'){
                    require_once('core/'.$class.'.php');
                }
                else{
                    require_once('models/'.$class.'.php');
                }
            });

            $url = '';
            if(isset($_GET['url']))
            {

                $url = explode('/',filter_var($_GET['url'], FILTER_SANITIZE_URL));
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFile = "controllers/".$controllerClass.".php";
                if(file_exists($controllerFile))
                {
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                }
                else
                    throw new Exception('Page Introuvable');
            }
            else
            {
                require_once('controllers/ControllerAccueil.php');
                $this_ctrl = new ControllerAccueil($url);
            }
        }
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();

            $this->_view = new View('Error');
            $this->_view->generate(array('errorMsg' => $errorMsg));


        }
    }

}