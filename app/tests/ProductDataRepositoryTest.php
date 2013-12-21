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
        $this->assertEquals($price, 12.3625);
    }
}
