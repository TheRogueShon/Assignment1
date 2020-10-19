<?php
class ProfileController extends Controller_Abstract
{
    public function run(){
        Session::create();

        $session = new Session();
        $session->add('user', 'testuser');
        $v = new View();
        $v->setTemplate(TPL_DIR . '/profile.tpl.php');

        $this->setModel(new ProfileModel());
        $this->setView ($v);

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