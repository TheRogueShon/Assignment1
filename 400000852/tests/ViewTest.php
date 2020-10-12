<?php
    use PHPUnit\Framework\TestCase;

    class ViewTest extends TestCase
    {
        private $view;

        public function setUp():void{
            $this->view = new View();
        }

        public function tearDown():void{

        }

        public function testViewValid(){
            $this->assertIsObject(new View, 'View is not an object!');
        }

        public function testSetTemplate(){
            $tplString = $this->view->setTemplate('Something');
            $this->assertIsString($tplString);
        }

        public function testSetDisplay(){
            $displayString = $this->view->display();
            $this->assertIsString($displayString, 'Value is not a string!');
        }

        public function testAddVar(){
            $addedData = $this->view->addVar('John', '31');
            $this->assertIsArray($addedData);
        } 
    } 