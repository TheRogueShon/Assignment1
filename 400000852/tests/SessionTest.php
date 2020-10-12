<?php
    use PHPUnit\Framework\TestCase;

    class SessionTest extends TestCase
    {
        private $session;

        public function setUp():void{
            $this->session = new Session();
        }

        public function tearDown():void{

        }

        public function testSessionValid()
        {
            $this->assertIsObject(new Session, 'Not an object');
        }

        public function testSessionHasStaticMethodCreate()
        {
            $method = new ReflectionMethod('Session', 'create');
            $this->assertTrue($method->isStatic(), 'Method create exists but is not static');
        }

        public function testSessionContainerCreated()
        {
            Session::create();
            $this->assertArrayHasKey('container', $_SESSION);
            $this->assertIsArray($_SESSION['container']);
        }
        
        public function testSessionHasMethodDestroy()
        {
            $class = new ReflectionClass('Session');
            $this->assertTrue($class->hasMethod('destroy'));
        }

        public function testAdd()
        {
            $sessValue = $this->session->add('John' , '31');
            $this->assertEquals('31', $sessValue);
        }

        public function testRemove()
        {
            Session::create();
            $this->session->add('John', '31');
            $removed = $this->session->remove('John');
            $this->assertNull($removed);
        }
    }