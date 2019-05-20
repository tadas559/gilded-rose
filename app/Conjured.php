<?php

namespace app;
require_once 'app/Item.php';

class Conjured extends Item {

    public function update() { 
    $this->quality -= 2;
    $this->sell_in -= 1;

    if($this->sell_in <= 0) {
    $this->quality -= 2;
    }
    
    if ($this->quality > 50) { 
    $this->quality = 50;
    }

    if($this->quality <= 0) { 
    $this->quality = 0;
    }

}
}

?>