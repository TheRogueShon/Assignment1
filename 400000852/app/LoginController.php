<?php
class LoginController extends Controller_Abstract
{
    public function run(){
        $this->setModel(new LoginModel());
        $this->setView (new View());

        $this->view->setTemplate('tpl/login.tpl.php');

        $this->view->display();

        $this->model->attach($this->view);

        $this->model->getAll();

        $this->model->notify();
    }
}