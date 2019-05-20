<?php
require_once 'app/GildedRose.php';
use app\GildedRose;

class SulfurasTest extends PHPUnit\Framework\TestCase
{
    public function test_sulfuras_before_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Sulfuras",10,22);
        $item->update();
        $this->assertEquals(22, $item->quality);
        $this->assertEquals(10, $item->sell_in);    
    }

    public function test_sulfuras_after_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Sulfuras",0,22);
        $item->update();
        $this->assertEquals(22, $item->quality);
        $this->assertEquals(0, $item->sell_in);    
    }

    public function test_sulfuras_after_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Sulfuras",0,0);
        $item->update();
        $this->assertEquals(0, $item->quality);
        $this->assertEquals(0, $item->sell_in);    
    }

    public function test_sulfuras_before_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Sulfuras",5,0);
        $item->update();
        $this->assertEquals(0, $item->quality);
        $this->assertEquals(5, $item->sell_in);    
    }

    public function test_sulfuras_before_sell_in_date_with_quality_maximum()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Sulfuras",5,50);
        $item->update();
        $this->assertEquals(50, $item->quality);
        $this->assertEquals(5, $item->sell_in);    
    }
}