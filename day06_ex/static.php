<?php
class Example { 

    public static function doc() {
        return 'This is SPARTA.';
    }

    public function __construct(array $kwargs) {
        print('Construct called' . PHP_EOL);
        return;
    }

    public function __destruct() {
        print('Destruct called' . PHP_EOL);
        return;
    }
}

print( '-----SHARING-----' . Example::doc() .  PHP_EOL); 
?>