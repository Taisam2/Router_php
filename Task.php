<?php 

class Task {

    public $description;
    public $completed = false;
    
    // public function __construct($description, $completed) 
    // {
    //     $this->description = $description;
    //     $this->completed = $completed;
    // }

    public function isComplete() {
        return $this->completed; 
    }

    public function complete() {
        return $this->complete = true;
    }
    public function inComplete() {
        return $this->complete = false;
    }
}

?>

