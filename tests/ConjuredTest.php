
<?php
require_once 'app/GildedRose.php';
use app\GildedRose;

class ConjuredTest extends PHPUnit\Framework\TestCase
{
    public function test_conjured_before_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Conjured",10,22);
        $item->update();
        $this->assertEquals(20, $item->quality);
        $this->assertEquals(9, $item->sell_in);    
    }

    public function test_conjured_after_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Conjured",0,22);
        $item->update();
        $this->assertEquals(18, $item->quality);
        $this->assertEquals(-1, $item->sell_in);    
    }

    public function test_conjured_after_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Conjured",0,0);
        $item->update();
        $this->assertEquals(0, $item->quality);
        $this->assertEquals(-1, $item->sell_in);    
    }

    public function test_conjured_before_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Conjured",5,0);
        $item->update();
        $this->assertEquals(0, $item->quality);
        $this->assertEquals(4, $item->sell_in);    
    }
}