<?php

class ProductDataRepositoryTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->repo = App::make('ProductDataRepository');
    }

    public function testGetIBP()
    {
        $ibp = $this->repo->getIBP(1, 5);
        $this->assertTrue($ibp instanceof Illuminate\Database\Eloquent\Model);
        $this->assertTrue($ibp instanceof IBP);
    }

    public function testGetSuggestedPrice()
    {
        $price = $this->repo->getSuggestedPrice(17, 5);
        $this->assertTrue(is_float($price));
        $this->assertEquals($price, 12.3625);
    }

    public function testGetRecentHistory()
    {
        $history = $this->repo->getRecentHistory(17, 5);
        $this->assertTrue($history instanceof Illuminate\Support\Collection);
        $this->assertTrue($history->first() instanceof PriceReport);
    }

    public function testGetDeviation()
    {
        $deviation = $this->repo->getDeviation(1, 5);
        $this->assertTrue(is_float($deviation));
        $this->assertEquals($deviation, 5.1567239635996);
    }
}
