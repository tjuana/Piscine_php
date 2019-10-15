<?php
class Example { 
    private $_x = 0;
    private $_y = 0;


    public function getX() {return $this->_x; }
    public function getY() {return $this->_y; }
    
    public function setX($x) {$this->_x = $x; return; }
    public function setY($y) {$this->_y = $y; return; }

    public function __construct() {
        print('Construct called' . PHP_EOL);
        return;
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
        return;
    }
    public function __invoke() {
       return $this->getX() + $this->getY();
    }
}

$instance = new Example();
$instance->setX(10);
$instance->setY(32);
print( $instance() . PHP_EOL );


?>