<?php

namespace app;
require 'app/Sulfuras.php';
require 'app/AgedBrie.php';
require 'app/BackStage.php';
require 'app/Conjured.php';
class Item {

    public $sell_in;
    public $quality;
    public $name;
    
    function __construct($name,$sell_in, $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    public function createItemByName($name,$quality,$sellIn) { 
         
        switch ($name) {
        case "Aged brie":
            return new AgedBrie($name,$quality,$sellIn);
            break;
        case "Backstage":
            return new BackStage($name,$quality,$sellIn);
            break;
        case "Conjured":
            return new Conjured($name,$quality,$sellIn);
            break;
        case "Sulfuras":
            return new Sulfuras($name,$quality,$sellIn);
            break;
        default:
            return new Item($name,$quality,$sellIn);
        }
    }
}

?>