<?php
class ExampleA {
    public      $pubATT = 21;
    protected   $_protectedAtt = 84;
    private     $_privateATT = 42;


    public function __construct() {
        print('Construct ExampleA called' . PHP_EOL);
        return;
    }

    public function __destruct() {
        print('Destruct ExampleA called' . PHP_EOL);
    }
    protected function pub_foo() {
        print('protected Func foo from class A' . PHP_EOL);
       return ;
    }

    private function priv_foo() {
        print('private Func foo from class A' . PHP_EOL);
       return ;
    }   
    public function foo() {
        print('private $_privateATT =' .  $this->_privateATT . PHP_EOL);
        print('public $_privateATT =' .  $this->pubATT . PHP_EOL);
        print('protected $_privateATT =' .  $this->_protectedAtt . PHP_EOL);
        $this->pub_foo();
        $this->priv_foo();

       return ;
    }   
}

class ExampleB extends ExampleA {
    


    public function __construct() {
        parent::__construct();
        print('Construct ExampleB called' . PHP_EOL);
        return;
    }

    public function __destruct() {
        parent::__destruct();
        print('Destruct ExampleB called' . PHP_EOL);
    }
    public function foo() {
        parent::foo();
        print('Func from class B' . PHP_EOL);
       return ;
    }
    
}
print('+++++++++++++++INSIDE A++++++++++++' . PHP_EOL);
//$insA = new ExampleA();
//$insA->foo();
$insB = new ExampleB();
$insB->foo();



?>
