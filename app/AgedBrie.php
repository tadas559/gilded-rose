<?php

namespace app;
require_once 'app/Item.php';
class AgedBrie extends Item {

    // updates aged brie item
    public function update() { 
    $this->quality += 1;
    $this->sellIn -= 1;

    if($this->sellIn <= 0) { // after sell by date is passed, quality increases twice as fast
    $this->quality += 1;
    }
    
    $this->checkAndFixQualityOverflow(); // fixes quality overflow if it exists

}
}

?>