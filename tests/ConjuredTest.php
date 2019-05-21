
<?php
require_once 'app/GildedRose.php';
use app\GildedRose;

class ConjuredTest extends PHPUnit\Framework\TestCase
{
    public function test_conjured_before_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Conjured",'sellIn' => 10,'quality' => 22)));
        $this->assertEquals(20, $gildedRose->items[0]->quality);
        $this->assertEquals(9, $gildedRose->items[0]->sellIn);
    }

    public function test_conjured_after_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Conjured",'sellIn' => 0,'quality' => 22)));
        $this->assertEquals(18, $gildedRose->items[0]->quality);
        $this->assertEquals(-1, $gildedRose->items[0]->sellIn);
    }

    public function test_conjured_after_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Conjured",'sellIn' => 0,'quality' => 0)));
        $this->assertEquals(0, $gildedRose->items[0]->quality);
        $this->assertEquals(-1, $gildedRose->items[0]->sellIn);
    }

    public function test_conjured_before_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Conjured",'sellIn' => 5,'quality' => 0)));
        $this->assertEquals(0, $gildedRose->items[0]->quality);
        $this->assertEquals(4, $gildedRose->items[0]->sellIn);
    }
}