<?php
class Example { 
    private $_att = 0;


    public function getAtt() {return $this->_att; }
    public function setAtt($v) {$this->_att = $v; return; }

    public function __construct( array $kwards ) {
        print('Construct called' . PHP_EOL);
        $this->setAtt($kwards['arg']);
        return;
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
    }
    public function __tostring() {
       return 'Example( $_att = ' . $this->getAtt() . ' )';
    }
    
}

$instance = new Example( array( 'arg' => 42));

print($instance . PHP_EOL);

?>