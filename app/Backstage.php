<?php

namespace app;
require_once 'app/Item.php';


class BackStage extends Item {

    public function update() { 
    $this->quality += 1;
    $this->sell_in -= 1;

    if($this->sell_in <= 10) {
    $this->quality += 1;
    }
    
    if ($this->sell_in <=5 ) { 
    $this->quality += 1;
    }

    if($this->sell_in <= 0) {
    $this->quality = 0;
    }

    if($this->quality > 50) {
    $this->quality = 50;
    }
    }

}

?>