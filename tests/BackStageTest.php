
<?php
require_once 'app/GildedRose.php';
use app\GildedRose;

class BackStageTest extends PHPUnit\Framework\TestCase
{
    public function test_backstage_before_sell_in_date_with_normal_date()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Backstage",12,22);
        $item->update();
        $this->assertEquals(23, $item->quality);
        $this->assertEquals(11, $item->sell_in);
    }

    public function test_backstage_before_sell_in_date_with_sell_in_date_range_from_10_to_6()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Backstage",9,12);
        $item->update();
        $this->assertEquals(14, $item->quality);
        $this->assertEquals(8, $item->sell_in);
    }

    public function test_backstage_before_sell_in_date_with_sell_in_date_lower_than_6()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Backstage",5,12);
        $item->update();
        $this->assertEquals(15, $item->quality);
        $this->assertEquals(4, $item->sell_in);
    }

    public function test_backstage_after_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Backstage",0,12);
        $item->update();
        $this->assertEquals(0, $item->quality);
        $this->assertEquals(-1, $item->sell_in);
    }

    public function test_backstage_before_sell_in_date_with_maximum_quality()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Backstage",5,50);
        $item->update();
        $this->assertEquals(50, $item->quality);
        $this->assertEquals(4, $item->sell_in);
    }

    public function test_backstage_after_sell_in_date_with_maximum_quality()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Backstage",0,50);
        $item->update();
        $this->assertEquals(0, $item->quality);
        $this->assertEquals(-1, $item->sell_in);
    }

    public function test_backstage_after_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Backstage",0,0);
        $item->update();
        $this->assertEquals(0, $item->quality);
        $this->assertEquals(-1, $item->sell_in);
    }

    public function test_backstage_before_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $item = $gildedRose->createItemByName("Backstage",0,5);
        $item->update();
        $this->assertEquals(0, $item->quality);
        $this->assertEquals(-1, $item->sell_in);
    }
}