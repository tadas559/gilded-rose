
<?php
require_once 'app/GildedRose.php';
use app\GildedRose;

class AgedBrieTest extends PHPUnit\Framework\TestCase
{
    public function test_aged_brie_before_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Aged brie",5,6);
        $item->update();
        $this->assertEquals(7, $item->quality);
        $this->assertEquals(4, $item->sell_in);
    }

    public function test_aged_brie_after_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Aged brie",0,6);
        $item->update();
        $this->assertEquals(8, $item->quality);
        $this->assertEquals(-1, $item->sell_in);
    }

    public function test_aged_brie_after_sell_in_date_with_maximum_quality()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Aged brie",5,50);
        $item->update();
        $this->assertEquals(50, $item->quality);
        $this->assertEquals(4, $item->sell_in);
    }

    public function test_aged_brie_before_sell_in_date_with_maximum_quality()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Aged brie",0,50);
        $item->update();
        $this->assertEquals(50, $item->quality);
        $this->assertEquals(-1, $item->sell_in);
    }
}