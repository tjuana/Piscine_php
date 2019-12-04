<?php
class Color {
    public $red;
    public $green;
    public $blue;
    static $verbose = false;

    function __construct( $arr ) {
        if (isset($arr['rgb'])) {
            $this->red = intval($arr['rgb']) >> 16 & 0xff;
            $this->green = intval($arr['rgb']) >> 8 & 0xff;
            $this->blue = intval($arr['rgb']) & 0xff;
        } else {
            $this->red = intval($arr['red']);
            $this->green = intval($arr['green']);
            $this->blue = intval($arr['blue']);
        }
        if (self::$verbose)
            echo $this->__toString() . " constructed.\n";
    }

    function __tostring() {
        return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
    }
    
    function __destruct() {
        if (self::$verbose) {
            echo $this->__tostring() . " destructed."  . PHP_EOL;
        }
    }
    static function doc() {
        echo file_get_contents("Color.doc.txt")  . PHP_EOL;
    }
    public function add($color) {
        return (new Color(array('red' => $this->red + $color->red, 'green' => $this->green + $color->green, 'blue' => $this->blue + $color->blue)));
    }
    public function sub($color) {
        return (new Color(array('red' => $this->red - $color->red, 'green' => $this->green - $color->green, 'blue' => $this->blue - $color->blue)));
    }
    public function mult ($factor) {
        return (new Color(array('red' => $this->red * $factor, 'green' => $this->green * $factor, 'blue' => $this->blue * $factor)));
    }
}
?>