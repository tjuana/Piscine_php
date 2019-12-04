<?php
class NightsWatch implements IFighter
{
    private $_team = array();

    public function recruit($man) {
        $this->_team[] = $man;
    }
    public function fight(){
        foreach ($this->_team as $name) {
            if (method_exists($name, "fight"))
                $name->fight();
        }
    }
}
?>