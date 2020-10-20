<?php
abstract class Controller_Abstract
{
    protected $model = null;
    protected $view = null;

    public function setModel(Observable_Model $model){
        $this->model = $model;
    }

    public function setView(View $view){
        $this->view = $view;
    }

    public function getModel(){
        return $this->model;
    }

    public function getView(){
        return $this->view;
    }

    abstract public function run();
}