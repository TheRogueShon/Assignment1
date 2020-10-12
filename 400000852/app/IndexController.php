<?php
class IndexController extends Controller_Abstract
{
    public function run(){
        $this->setModel(new IndexModel());
        $this->setView (new View());

        $this->view->setTemplate('tpl/index.tpl.php');

        $this->view->display();

        $this->model->attach($this->view);

        $this->model->getAll();

        $this->model->notify();
    }
}