<?php
class SignupController extends Controller_Abstract
{
    public function run(){
        $v = new View();
        $v->setTemplate(TPL_DIR . '/signup.tpl.php');

        $this->setModel(new SignupModel());
        $this->setView ($v);

        $this->model->attach($this->view);
        $data = $this->model->getAll();
        
        $this->model->updateChangedData($data);

        $this->model->notify();
    }
}