<?php

namespace app;
require 'app/Sulfuras.php';
require 'app/AgedBrie.php';
require 'app/BackStage.php';
require 'app/Conjured.php';
class Item {

    public $sellIn; 
    public $quality;
    public $name;
    
    function __construct($name,$sellIn, $quality) {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

    // creates object for particular item type
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

    // checks for quality overflow and fixes it
    public function checkAndFixQualityOverflow() { 
        if($this->quality > 50) {
            $this->quality = 50;
        }
    }

    // updates item which does not have aged brie, backstage, conjured or sulfuras name
    public function update() {
        $this->quality = -1;
        $this->sellIn = -1;
    }
}

?>