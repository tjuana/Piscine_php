<?php
class Example { 
    private $_att = 0;



    public function getAtt() {return $this->_att; }
    
    public function setAtt($v) {$this->_att = $v; return; }


    public function __construct(array $kwargs) {
        print('Construct called' . PHP_EOL);
        $this->setAtt( $kwargs['arg']);
        return;
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
        return;
    }
    public function __clone() {
       print( 'Clone called' . PHP_EOL);
       return;
    }
}
print( '-----SHARINg-----' . PHP_EOL);
$instance1 = new Example( array( 'arg' => 42));
$instance2 = $instance1;
print ( '$instance1->getAtt(): ' . $instance1->getAtt() . PHP_EOL);
print ( '$instance2->getAtt(): ' . $instance2->getAtt() . PHP_EOL);
$instance1->setAtt(30);
print ( '$instance1->getAtt(): ' . $instance1->getAtt() . PHP_EOL);
print ( '$instance2->getAtt(): ' . $instance2->getAtt() . PHP_EOL);

print( '--=Cloning=--' . PHP_EOL);
$instance3 = new Example( array( 'arg' => 42));
$instance4 = clone $instance3;
print ( '$instance3->getAtt(): ' . $instance3->getAtt() . PHP_EOL);
print ( '$instance4->getAtt(): ' . $instance4->getAtt() . PHP_EOL);
$instance3->setAtt(30);
print ( '$instance3->getAtt(): ' . $instance3->getAtt() . PHP_EOL);
print ( '$instance4->getAtt(): ' . $instance4->getAtt() . PHP_EOL);
print( '--=END=--' . PHP_EOL);
?>