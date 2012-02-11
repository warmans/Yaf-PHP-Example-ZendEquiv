<?php
class IndexController extends Zend_Controller_Action
{
    public function indexAction() {
        $page = ($this->_request->getParam('page')) ?: 0;

        $blog = new Application_Model_Blog();


        /*view*/
        $this->view->entries = $blog->fetchAll();
        $this->view->page = $page;

        /*layout*/
        $this->view->layout()->meta_title = 'A Blog';
    }
    
}