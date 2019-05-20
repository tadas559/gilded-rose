
<?php
require_once 'app/gilded_rose.php';
//use PHPUnit\Framework\TestCase;
class GildedRoseTest extends PHPUnit\Framework\TestCase
{
    public function testFoo()
    {
        $items = array(new Item("foo", 0, 0));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("fixm e", $items[0]->name);
    }
}