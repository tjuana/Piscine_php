<?php
abstract class Fighter {
    
    abstract public function fight($target);
    
    public function __construct($fighter) {
        $this->fighter_type = $fighter;
    }
    public function Get_type() {
        return $this->fighter_type;
    }
}
?>
