<?php
class CoursesController extends Controller_Abstract
{
    public function run(){
        $this->setModel(new CoursesModel());
        $this->setView (new View());

        $this->view->setTemplate('tpl/courses.tpl.php');

        $this->view->display();

        $this->model->attach($this->view);

        $this->model->getAll();

        $this->model->notify();
    }
}