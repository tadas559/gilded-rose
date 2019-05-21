<?php

namespace app;
require_once 'app/Item.php';
class AgedBrie extends Item {

    public function update() { 
    $this->quality += 1;
    $this->sell_in -= 1;

    if($this->sell_in <= 0) {
    $this->quality += 1;
    }
    
    if ($this->quality > 50) { 
    $this->quality = 50;
    }

}
}

?>