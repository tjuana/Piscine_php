<?php
class Example { 
    public $x = 0;
    public $y = 0;

    public function __construct( array $kwards ) {
        print('Construct called' . PHP_EOL);
        $this->x = $kwargs['x'];
        $this->y = $kwargs['y'];
        return;
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
    }

}
$instance1 = new Example( array( 'x' => 12, 'y' => 34));
$instance2 = new Example( array( 'x' => 12, 'y' => 34));
$instance3 = $instance1;

if ( $instance1 == $instance2)
    print( '$instance1 == $instance2' . PHP_EOL);
else
    print(' $instance1 != $instance2' . PHP_EOL);

if ( $instance1 == $instance3)
    print( '$instance1 == $instance3' . PHP_EOL);
else
    print(' $instance1 != $instance3' . PHP_EOL);

if ( $instance1 === $instance2)
    print( '$instance1 === $instance2' . PHP_EOL);
else
    print(' $instance1 !== $instance2' . PHP_EOL);
if ( $instance1 === $instance3)
    print( '$instance1 === $instance3' . PHP_EOL);
else
    print(' $instance1 !== $instance3' . PHP_EOL);
?>