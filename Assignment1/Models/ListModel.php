<?php

class ListModel
{
    public $list;

    public function add($toAdd)
    {
        $this->list[] = $toAdd;
    }
}

?>