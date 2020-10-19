<?php
class CoursesController extends Controller_Abstract
{
    public function run(){
        Session::create();
        $v = new View();
        $v->setTemplate(TPL_DIR . '/courses.tpl.php');

        $this->setModel(new CoursesModel());
        $this->setView ($v);

        $session = new Session();

        $this->model->attach($this->view);
        $user = $session->see('user');
        if($session->accessible($user, 'profile')){
            $data = $this->model->getAll();
        
            $this->model->updateChangedData($data);

            $this->model->notify();
        }
        else{
            $v->setTemplate(TPL_DIR . '/login.tpl.php');
            $v->display();
        }
    }
}