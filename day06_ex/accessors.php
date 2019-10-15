<?php
class Example { 
    private $_att = 0;

    public function getAtt() {return $this->_att; }
    
    public function setAtt($v) {
        if ($this->_att + $v > 50 )
            $this->_att = 50;
        else
            $this->_att = $v;
        return; 
    }


    public function __construct(array $kwargs) {
        print('Construct called' . PHP_EOL);
        $this->setAtt( $kwargs['arg']);
        print('$this->getAtt7():' . $this->getAtt() . PHP_EOL);
        return;
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
        return;
    }
}

print( '-----SHARINg-----' . PHP_EOL);
$instance1 = new Example( array( 'arg' => 42));
$instance2 = new Example( array( 'arg' => 77));
$instance1->setAtt( 30 );
$instance2->setAtt( 30 );
print('$instance1->getAtt(): ' . $instance1->getAtt() . PHP_EOL);
print('$instance1->getAtt(): ' . $instance2->getAtt() . PHP_EOL);

?>