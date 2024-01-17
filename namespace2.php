<?php
namespace Html;
class table{
    public $title="";
    public $nrows=0;
    public function message(){
        echo "this is table titled {$this->title} and have {$this->nrows} number of rows";
    }
}
class row{
    public $numcells;
    public function message(){
        echo "this table has {$this->numcells} cells";
    }
}
?>