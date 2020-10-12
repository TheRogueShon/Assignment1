<?php
   use PHPUnit\Framework\TestCase;
/*
    require 'framework/Controller_Abstract.php';
    require 'framework/Observable_Model.php';
    require 'framework/View.php'; */

    class ControllerTest extends TestCase
    {
        private $controller;
        protected $model = null;
        protected $view = null;

        public function setUp():void{
            $this->controller = new IndexController();
            //$this->view = new View();
            //$this->model = new IndexModel();
        }

        public function tearDown():void{

        }

        public function testControllerValid(){
            $this->assertIsObject(new IndexController, 'Controller is not an object!');
        }

        public function testSetModel(){
            $this->assertNull($this->model, 'Model is not assigned to null!');
            //$this->assertEquals(get_class($this->model, 'Model'));
            $this->controller->setModel(new IndexModel);
        }

        public function testSetView(){
            $this->assertNull($this->view, 'View is not assigned to null!');
            //$this->assertEquals(get_class($this->view, 'View'));
            $this->controller->setView(new View);
        }

        public function testRun(){
            $class = new ReflectionClass('IndexController');
            $this->assertTrue($class->hasMethod('run'));
        }
    } 