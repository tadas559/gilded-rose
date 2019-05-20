<?php

namespace app;
use app\AgedBrie;
use app\BackStage;
use app\Conjured;
use app\Sulfuras;
require 'app/Sulfuras.php';
require 'app/AgedBrie.php';
require 'app/BackStage.php';
require 'app/Conjured.php';

class GildedRose {
    public function createItemByName($name,$quality,$sellIn) { 
        if($name == "Aged brie") { 
            return new AgedBrie($quality,$sellIn);
        }
        else if($name == "Backstage") { 
            return new BackStage($quality,$sellIn);
        }

        else if($name == "Conjured") { 
            return new Conjured($quality,$sellIn);
        }

        else if($name == "Sulfuras") { 
            return new Sulfuras($quality,$sellIn);
        }
    } 
}
