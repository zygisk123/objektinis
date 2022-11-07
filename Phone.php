<?php
class Phone{

    public $name;
    public $produced;
    public $year;
    public $condition;

    function __construct($name = null, $produced = null, $year = null, $condition = null){
        $this->name = $name;
        $this->produced = $produced;
        $this->year = $year;
        $this->condition = $condition;
    }
}

?>