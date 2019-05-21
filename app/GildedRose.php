<?php

namespace app;
require 'app/Item.php';

class GildedRose
{

    public $items = array();

    public function updateItems() { 
        foreach ($this->items as $value) { 
            $value->update();
        }
    }

    public function createItems($itemToCreate) { 
        $tempItem = new Item("",0,0);
        for($i = 0; $i < count($itemToCreate); $i++) {
        $items[$i] = $tempItem->createItemByName($itemToCreate[$i]["name"],$itemToCreate[$i]["sellIn"],$itemToCreate[$i]["quality"]);
        }
        
        $this->items = $items;
    }

    public function createAndUpdateItems($itemToCreate) { 
        $this->createItems($itemToCreate);
        $this->updateItems();
    }


}

 ?>