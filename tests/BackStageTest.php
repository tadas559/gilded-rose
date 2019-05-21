
<?php
require_once 'app/GildedRose.php';
use app\GildedRose;

class BackStageTest extends PHPUnit\Framework\TestCase
{
    public function test_backstage_before_sell_in_date_with_normal_date()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Backstage",'sellIn' => 12,'quality' => 22)));
        $this->assertEquals(23, $gildedRose->items[0]->quality);
        $this->assertEquals(11, $gildedRose->items[0]->sell_in);
    }

    public function test_backstage_before_sell_in_date_with_sell_in_date_range_from_10_to_6()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Backstage",'sellIn' => 9,'quality' => 12)));
        $this->assertEquals(14, $gildedRose->items[0]->quality);
        $this->assertEquals(8, $gildedRose->items[0]->sell_in);
    }

    public function test_backstage_before_sell_in_date_with_sell_in_date_lower_than_6()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Backstage",'sellIn' => 5,'quality' => 12)));
        $this->assertEquals(15, $gildedRose->items[0]->quality);
        $this->assertEquals(4, $gildedRose->items[0]->sell_in);
    }

    public function test_backstage_after_sell_in_date()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Backstage",'sellIn' => 0,'quality' => 12)));
        $this->assertEquals(0, $gildedRose->items[0]->quality);
        $this->assertEquals(-1, $gildedRose->items[0]->sell_in);
    }

    public function test_backstage_before_sell_in_date_with_maximum_quality()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Backstage",'sellIn' => 5,'quality' => 50)));
        $this->assertEquals(50, $gildedRose->items[0]->quality);
        $this->assertEquals(4, $gildedRose->items[0]->sell_in);
    }

    public function test_backstage_after_sell_in_date_with_maximum_quality()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Backstage",'sellIn' => 0,'quality' => 50)));
        $this->assertEquals(0, $gildedRose->items[0]->quality);
        $this->assertEquals(-1, $gildedRose->items[0]->sell_in);
    }

    public function test_backstage_after_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Backstage",'sellIn' => 0,'quality' => 0)));
        $this->assertEquals(0, $gildedRose->items[0]->quality);
        $this->assertEquals(-1, $gildedRose->items[0]->sell_in);
    }

    public function test_backstage_before_sell_in_date_with_quality_zero()
    {
        $gildedRose = new GildedRose();
        $gildedRose->createAndUpdateItems(array(array('name' => "Backstage",'sellIn' => 0,'quality' => 5)));
        $this->assertEquals(0, $gildedRose->items[0]->quality);
        $this->assertEquals(-1, $gildedRose->items[0]->sell_in);
    }
}