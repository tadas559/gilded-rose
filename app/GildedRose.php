<?php

namespace app;
require 'app/Item.php';
class GildedRose
{

    public $items = array();

    // updates all items from array
    public function updateItems() { 
        foreach ($this->items as $value) { 
            $value->update();
        }
    }

    // creates items array
    public function createItemsArray($itemToCreate) { 
        $tempItem = new Item("",0,0); // creates temporary item
        for($i = 0; $i < count($itemToCreate); $i++) { // adds all items from associative multidimentional array to temporary array
        $items[$i] = $tempItem->createItemByName($itemToCreate[$i]["name"],$itemToCreate[$i]["sellIn"],$itemToCreate[$i]["quality"]);
        }
        $this->items = $items; // assigns temporary items array to gilded rose items array
    }

    // creates items array and updates all items in it
    public function createAndUpdateItems($itemToCreate) {
        $this->createItemsArray($itemToCreate);
        $this->updateItems();
    }

}

 ?>