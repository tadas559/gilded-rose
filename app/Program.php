<?php

namespace app;
require 'app/GildedRose.php';

class Program
{

    public function main() {
        
        $itemsToCreate = array(array('name' => "Aged brie",'sellIn' => 10,'quality' => 20), array('name' => "Aged brie",'sellIn' => 10,'quality' => 20)
        );

        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems($itemsToCreate);

   
    }
}


Program::main();