<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    private $_config;

    /*get a copy of the config*/
    public function _initBootstrap(){
        $this->_config = $this->getOptions();
    }

    public function _initRoutes(){

        $router = new Zend_Controller_Router_Rewrite();

        $router->addRoute(
            "paging_example",
            new Zend_Controller_Router_Route_Regex(
                "index/page/(\d+)",
                array('controller' => "index", "action"=>"index"),
                array(1 => "page")
            )
        );

        $this->bootstrap('frontController');
        $this->frontController->setrouter($router);
    }
}