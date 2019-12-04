<?php

require_once 'Color.class.php';

class Vertex {
    private $_x;
    private $_y;
    private $_z;
    private $_w = 1.0;
    private $_color;

    static $verbose = false;

    function __construct( $arr ) {
        if (isset($arr['x']) && isset($arr['y']) && isset($arr['z'])) {
            $this->_x = $arr['x'];
            $this->_y = $arr['y'];
            $this->_z = $arr['z'];
        }
        if (isset($arr['w']))
            $this->_w = $arr['w'];
        if (isset($arr['color'])) {
            $this->_color = $arr['color'];
        } else {
            $this->_color = new Color(array("rgb" => 0xffffff));
        }
        if (self::$verbose)
            echo $this->__toString() . " constructed.\n";
    }

    function __toString() {
        if (self::$verbose) {
            return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f, Color( red: %3d, green: %3d, blue: %3d ))", array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue)));
        } else {
            return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
        }
    }
    
    function setX($x) {
        return $this->_x = $x;
    }
    function setY($y) {
        return $this->_y = $y;
    }
    function setZ($z) {
        return $this->_z = $z;
    }    
    function setW($w) {
        return $this->_w = $w;
    }
    function getX(){
        return $this->_x;
    }
    function getY(){
        return $this->_y;
    }
    function getZ(){
        return $this->_z;
    }
    function getW(){
        return $this->_w;
    }
    function setColor($color) {
        return $this->_color = $color;
    }
    function getColor() {
        return $this->_color;
    }
    

    function __destruct() {
        if (self::$verbose) {
            echo $this->__tostring() . " destructed."  . PHP_EOL;
        }
    }
    static function doc() {
        echo file_get_contents("Vertex.doc.txt")  . PHP_EOL;
    }
}
?>