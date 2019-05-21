<?php

namespace app;
require 'app/GildedRose.php';

class Program
{

    // updates and prints items
    public function main() {
        
        $itemsToCreate = array(array('name' => "Aged brie",'sellIn' => 10,'quality' => 20), array('name' => "Aged brie",'sellIn' => 11,'quality' => 23));

        $gildedRose = new GildedRose();
        $gildedRose->createItemsArrayAndUpdate($itemsToCreate); // update items
        
        for($i = 0; $i < count($itemsToCreate); $i++) { // print items
        echo $gildedRose->items[$i]->quality;
        echo "\n";
        }
    }

}

Program::main();