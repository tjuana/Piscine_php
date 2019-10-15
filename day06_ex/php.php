#!/usr/bin/php
<?php

function my_func($p1, $p2)
{
    return $p1 + $p2;
}

print("HEllo\n");

$my_str = "World";
$my_var = "21" + "21";
//$my_tab = array("zero", "un", "deux");
$my_tab = explode(",", "zero,un,deux");
$my_hash = array("key1" => "val1", "key2" => "val2");

$my_hash["key1"] = "Jhony";

//echo "$my_var\n$my_str\n";
//echo $my_tab[2];
//echo "\n";
//echo $my_hash["key1"]."\n";
//print_r($my_tab);

//echo my_func("12", "11");
//echo "\n";
if ($my_tab[2] == "deux") {
    echo "OK\n";
}
else {
    echo "fu";
}
echo "$argc\n";
print_r($argv);

foreach ($my_tab as $elem) {
    echo "$elem\n";
}

/*

class Example { 
    public $att1 = 0;
    public $att2 = 0;
    public $att3 = 0;

    public function __construct( array $kwargs) {
        print('Construct called' . PHP_EOL);

        if ( array_key_exists( 'arg1' , $kwargs))
            $this->att1 = $kwargs['arg1'];
        else
            $this->att1 = -1;

        $this->att2 = $kwargs['arg2'];

        if ( array_key_exists( 'arg3', $kwargs))
            $this->att3 = $kwargs['arg3'];
        else
            $this->att3 = $this->att1;          
        
        print( '$this->att1: ' . $this->att1 . PHP_EOL);
        print( '$this->att2: ' . $this->att2 . PHP_EOL);
        print( '$this->att3: ' . $this->att3 . PHP_EOL);
        return;
    }
    public function __destruct() {
        print( 'Destrucr called' . PHP_EOL );
        return;
    }
}

$instance = new Example( array( 'arg1' => 53, 'arg2' => 42, 'arg3' => 31));
$instance = new Example( array( 'arg1' => 31, 'arg2' => 42, 'arg3' => 53));
$instance = new Example( array( 'arg1' => 53, 'arg2' => 42));
$instance = new Example( array( 'arg2' => 42));
$instance = new Example( array( 'arg3' => 31, 'arg2' => 42));


123 video 
class Example { 
    public $att1 = 0;
    private $_priv_foo = 'hello';

    function __construct() {
        print('Constr' . PHP_EOL);

        print('$this->publicfoo: ' . $this->publicfoo . PHP_EOL);
        $this->publicfoo = 42;
        print('$this->publicfoo: ' . $this->publicfoo . PHP_EOL);

        print('$this->_priv_foo: ' . $this->_priv_foo . PHP_EOL);
        $this->_priv_foo = 'world';
        print('$this->_priv_foo: ' . $this->_priv_foo . PHP_EOL);

        $this->publicbar();
        $this->_privatebar();       
        return;
    }
    function __destruct() {
        print('Denstr' . PHP_EOL);
        return;
    }
    function publicbar() {
        print('Method_pu_bar' . PHP_EOL);
        return;
    }
    function _privatebar() {
        print('Method_priv_bar' . PHP_EOL);
        return;
    }
}

$instance = new Example();

print( '$instance->publicfoo: ' . $instance->publicfoo . PHP_EOL);
$instance->publicfoo = 100;
print('$instance->publicfoo: ' . $instance->publicfoo . PHP_EOL);

$instance->publicbar();

print('$this->_priv_foo: ' . $this->_priv_foo . PHP_EOL);
$this->_priv_foo = 'world';
print('$this->_priv_foo: ' . $this->_priv_foo . PHP_EOL);

$instance->_privatebar();

*/
?>