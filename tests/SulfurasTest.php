<?php
require_once 'app/GildedRose.php';
use app\GildedRose;

class SulfurasTest extends PHPUnit\Framework\TestCase
{
    public function test_sulfuras_before_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Sulfuras",'sellIn' => 10,'quality' => 22)));
        $this->assertEquals(22, $gildedRose->items[0]->quality);
        $this->assertEquals(10, $gildedRose->items[0]->sellIn);
    }

    public function test_sulfuras_after_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Sulfuras",'sellIn' => 0,'quality' => 22)));
        $this->assertEquals(22, $gildedRose->items[0]->quality);
        $this->assertEquals(0, $gildedRose->items[0]->sellIn);
    }

    public function test_sulfuras_after_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Sulfuras",'sellIn' => 0,'quality' => 0)));
        $this->assertEquals(0, $gildedRose->items[0]->quality);
        $this->assertEquals(0, $gildedRose->items[0]->sellIn);
    }

    public function test_sulfuras_before_sell_in_date_with_quality_zero()
    { 
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Sulfuras",'sellIn' => 5,'quality' => 0)));
        $this->assertEquals(0, $gildedRose->items[0]->quality);
        $this->assertEquals(5, $gildedRose->items[0]->sellIn);
    }
}