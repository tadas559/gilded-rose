<?php

namespace app;
require_once 'app/Item.php';


class BackStage extends Item {

    // updates backstage item
    public function update() { 

    $this->quality += 1;
    $this->sellIn -= 1;

    if($this->sellIn <= 10) { // increase quality if sell in date is lower than 10
    $this->quality += 1;
    }
    
    if ($this->sellIn <=5 ) { // increase quality if sell in date is lower than 5
    $this->quality += 1;
    }

    if($this->sellIn <= 0) { // quality drops to 0 after the concert
    $this->quality = 0;
    }

    $this->checkAndFixQualityOverflow(); // fixes quality overflow if it exists
    }

}

?>