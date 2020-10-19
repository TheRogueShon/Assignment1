<?php
class LoginController extends Controller_Abstract
{
    public function run(){
        $v = new View();
        $v->setTemplate(TPL_DIR . '/login.tpl.php');

        $this->setModel(new LoginModel());
        $this->setView ($v);

        $this->model->attach($this->view);
        $data = $this->model->getAll();
        
        $this->model->updateChangedData($data);

        $this->model->notify();
    }
}