<?php
class Example { 
    private $_att = 0;


    public function getAtt() {return $this->_att; }
    public function setAtt($v) {
        if ($this->_att + $v > 50) 
            $this->_att = 50;
        else
            $this->_att = $v;
        return;
    }

    public function __get( $att ) {
        print( 'Attemps to acces \'' . $att . '\' atribute, this script should die' . PHP_EOL );
        return 'arrrg';
    }

    public function __set( $att, $value ) {
        print( 'Attemps to set \'' . $att . '\' atribute to \'' . $value . '\' this script should die' . PHP_EOL );
        return 'arrrg';
    }

    public function __construct( array $kwards ) {
        print('Construct called' . PHP_EOL);
        $this->setAtt($kwards['arg']);
        print('$this->getAtt(): ' . $this->getAtt() . PHP_EOL );
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
    }
}

$instance = new Example( array( 'arg' => 42));

print( '$instance->foo: ' . $instance->foo. PHP_EOL);
print( '$instance->_att: ' . $instance->_att. PHP_EOL);
$instance->foo = 21;
$instance->_att = 84;
?>