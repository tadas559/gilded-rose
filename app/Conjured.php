<?php

namespace app;
require_once 'app/Item.php';
class Conjured extends Item {

    // updates conjured item
    public function update() { 
    $this->quality -= 2; // degrades in quality twice as fast as normal items
    $this->sellIn -= 1;

    if($this->sellIn <= 0) { // degrades in quality twice as fast as normal items
    $this->quality -= 2;
    }
    
    $this->checkAndFixQualityOverflow();  // fixes quality overflow if it exists

    if($this->quality <= 0) {  // fixes quality if it's negative
    $this->quality = 0;
    }
    }
}

?>