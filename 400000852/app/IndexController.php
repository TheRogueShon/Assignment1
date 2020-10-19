<?php
class IndexController extends Controller_Abstract
{
    public function run(){

        $v = new View();
        $v->setTemplate(TPL_DIR . '/index.tpl.php');

        $this->setModel(new IndexModel());
        $this->setView ($v);

        $this->model->attach($this->view);
        $data = $this->model->getAll();
        
        $this->model->updateChangedData($data);

        $this->model->notify();
    }
}