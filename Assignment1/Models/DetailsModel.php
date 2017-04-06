<?php

class DetailsModel
{
    public $name;
    public $description;
    public $imageSrc;
    public $reportedBy;
    public $spottedWhen;
    
    public function __construct($name, $description, $imageSrc, $reportedBy, $spottedWhen)
    {
        $this->name = $name;
        $this->description = $description;
        $this->imageSrc = $imageSrc;
        $this->reportedBy = $reportedBy;
        $this->spottedWhen = $spottedWhen;
    }
}

?>