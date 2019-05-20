<?php

namespace app;

class Item {
    public $sell_in;
    public $quality;
    function __construct($sell_in, $quality) {
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }
    public function __toString() {
        return "{$this->sell_in}, {$this->quality}";
    }
}

?>