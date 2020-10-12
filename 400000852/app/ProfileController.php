<?php
class ProfileController extends Controller_Abstract
{
    public function run(){
        $this->setModel(new ProfileModel());
        $this->setView (new View());

        $this->view->setTemplate('tpl/profile.tpl.php');

        $this->view->display();

        $this->model->attach($this->view);

        $this->model->getAll();

        $this->model->notify();
    }
}