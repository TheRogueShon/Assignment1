<?php
class SignupController extends Controller_Abstract
{
    public function run(){
        $this->setModel(new SignupModel());
        $this->setView (new View());

        $this->view->setTemplate('tpl/signup.tpl.php');

        $this->view->display();

        $this->model->attach($this->view);

        $this->model->getAll();

        $this->model->notify();
    }
}