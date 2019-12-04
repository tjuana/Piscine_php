<?php
class UnholyFactory {
    public $arr = array();
    public function absorb($inst) {

        if ($inst instanceof Fighter) {   
            if (in_array($inst, $this->arr))
                echo "(Factory already absorbed a fighter of type " . $inst->Get_type() . ")\n";
            else {
                $this->arr[get_class($inst)] = $inst;
                echo "(Factory absorbed a fighter of type " . $inst->Get_type() . ")\n";
            }
        } else
            echo "(Factory can't absorb this, it's not a fighter)\n";          
    }
    public function fabricate($rf) {
        foreach ($this->arr as $key => $value) {
            if ($value->Get_type() == $rf) {
                $fighter = clone $this->arr[$key];
                echo "(Factory fabricates a fighter of type " . $rf . ")\n";
                return $fighter;
            }
        }
        echo "(Factory hasn't absorbed any fighter of type " . $rf . ")\n";
    }
}
?>