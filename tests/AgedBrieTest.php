
<?php
require_once 'app/GildedRose.php';
use app\GildedRose;

class AgedBrieTest extends PHPUnit\Framework\TestCase
{
    public function test_aged_brie_before_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Aged brie",'sellIn' => 5,'quality' => 6)));

        $this->assertEquals(7, $gildedRose->items[0]->quality);
        $this->assertEquals(4, $gildedRose->items[0]->sell_in);
    }

    public function test_aged_brie_after_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Aged brie",'sellIn' => 0,'quality' => 6)));

        $this->assertEquals(8, $gildedRose->items[0]->quality);
        $this->assertEquals(-1, $gildedRose->items[0]->sell_in);
    }

    public function test_aged_brie_after_sell_in_date_with_maximum_quality()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Aged brie",'sellIn' => 5,'quality' => 50)));

        $this->assertEquals(50, $gildedRose->items[0]->quality);
        $this->assertEquals(4, $gildedRose->items[0]->sell_in);
    }

    public function test_aged_brie_before_sell_in_date_with_maximum_quality()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Aged brie",'sellIn' => 0,'quality' => 50)));

        $this->assertEquals(50, $gildedRose->items[0]->quality);
        $this->assertEquals(-1, $gildedRose->items[0]->sell_in);
    }
}