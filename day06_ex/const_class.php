<?php
class Example { 
    const CST1 = 1;
    const CST2 = 2;

    public function __construct(array $kwargs) {
        print('Construct called' . PHP_EOL);
        if ( $kwargs['arg'] == self::CST1)
            print('arg is CST1' . PHP_EOL);
        else if( $kwargs['arg'] == self::CST2)
            print('arg is CST2' . PHP_EOL);
        else
            print( 'arg is not a class const' . PHP_EOL);
        return;
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
        return;
    }
}

print( '-----SHARING-----' . PHP_EOL);
$instance1 = new Example( array( 'arg' =>  Example::CST1));
$instance2 = new Example( array( 'arg' =>  Example::CST2));
$instance3 = new Example( array( 'arg' =>  42));


?>