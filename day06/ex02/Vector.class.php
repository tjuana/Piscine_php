<?php

require_once 'Color.class.php';
require_once 'Vertex.class.php';

class Vector {
    private $_x;
    private $_y;
    private $_z;
    private $_w = 0.0;
    private $_color;

    static $verbose = false;

    function __construct( $arr ) {
        if (isset($arr['dest']) && !empty($arr['dest']) && $arr['dest']){
            if (isset($arr['orig']) && !empty($arr['orig']) && $arr['orig']){
                $orig = new Vertex (array('x' => $arr['orig']->getX(), 'y' => $arr['orig']->getY(), 'z' => $arr['orig']->getZ()));
        }   else {
                $orig = new Vertex (array('x' => 0.0, 'y' => 0.0, 'z' => 0.0, 'w' => 1.0));
        }
        $this->_x = $arr['dest']->getX() - $orig->getX();
        $this->_y = $arr['dest']->getY() - $orig->getY();
        $this->_z = $arr['dest']->getZ() - $orig->getZ();
        }
        if (self::$verbose){
            echo $this->__toString() . " constructed.\n";
        }
    }

    function getX() {
        return $this->_x;
    }
    function getY() {
        return $this->_y;
    }
    function getZ() {
        return $this->_z;
    }
    function getW() {
        return $this->_w;
    }
    

    public function magnitude() {
        return sqrt(pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z, 2));
    }
    public function normalize() {
        if ($this->magnitude() == 1.00) {
            return new Vector(array('orig' => $arr['orig'], 'dest' => $arr['dest']));
        } else {
            $v0 = new Vertex(array('x' => 0.00, 'y' => 0.00, 'z' => 0.00));
            $v1 = new Vertex(array('x' => $this->_x / $this->magnitude(),'y' =>  $this->_y / $this->magnitude(),'z' =>  $this->_z / $this->magnitude()));
            return new Vector( array( 'orig' => $v0, 'dest' => $v1 ) );
        }
    }

    public function add(Vector $rhs) {
        $v1 = new Vertex(array('x' => $this->_x + $rhs->getX(), 'y' => $this->_y + $rhs->getY(), 'z' => $this->_z + $rhs->getZ()));
        return (new Vector(array('dest' => $v1)));
    }
    public function sub(Vector $rhs) {
        $v1 = new Vertex(array('x' => $this->_x - $rhs->getX(), 'y' => $this->_y - $rhs->getY(), 'z' => $this->_z - $rhs->getZ()));
        return (new Vector(array('dest' => $v1)));
    }
    public function opposite() {
        $v1 = new Vertex(array('x' => -$this->_x, 'y' => -$this->_y, 'z' => -$this->_z));
        return (new Vector(array('dest' => $v1)));
    }
    public function scalarProduct($k) {
        $v1 = new Vertex(array('x' => $this->_x * $k, 'y' => $this->_y * $k, 'z' => $this->_z * $k));
        return (new Vector(array('dest' => $v1)));
    }
    public function dotProduct(Vector $rhs) {
        return ($this->_x * $rhs->getX() + $this->_y * $rhs->getY() + $this->_z * $rhs->getZ());
    }
    public function crossProduct(Vector $rhs) {
        $v1 = new Vertex(array('x' => $this->_y * $rhs->getZ() - $this->_z * $rhs->getY(), 'y' => $this->_z * $rhs->getX() - $this->_x * $rhs->getZ(), 'z' => $this->_x * $rhs->getY() - $this->_y * $rhs->getX()));
        return (new Vector(array('dest' => $v1)));
    }
    public function cos(Vector $rhs) {
        return ($this->dotProduct($rhs) / ($this->magnitude() * sqrt(pow($rhs->getX(), 2) + pow($rhs->getY(), 2) + pow($rhs->getZ(), 2))));
    }
    function __toString() {
        return (vsprintf("Vector( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f ", array($this->_x, $this->_y, $this->_z, $this->_w)));
    }
    
    function __destruct() {
        if (self::$verbose) {
            echo $this->__tostring() . " destructed."  . PHP_EOL;
        }
    }
    static function doc() {
        echo file_get_contents("Vector.doc.txt")  . PHP_EOL;
    }
}
?>