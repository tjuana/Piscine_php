<?php
class Example { 

    public function __construct() {
        print('Construct called' . PHP_EOL);
        return;
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
        return;
   }
   public function __call( $f, $args) {
        print('Attempt to call func \'' . $f . '\' with params');
        print_r($args);
        return;       
   }
   public static function __callstatic( $f, $args) {
        print('Attempt to call static func \'' . $f . '\' with params');
        print_r($args);
        return;       
}
}

print( '-----SHARING-----' . PHP_EOL);
$instance = new Example();
$instance->foo(1, 2, 3);
Example::bar(4, 5, 6);
?>