<?php

class ProductsControllerTest extends TestCase
{
    use Way\Tests\ControllerHelpers;

    public function setUp()
    {
        parent::setUp();
        Route::enableFilters();
        Session::put('province_id', 5);
    }

    public function testProductsIndex()
    {
        $this->call('GET', route('products.index'));
        $this->see('Productos');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testProductsShow()
    {
        $product = Product::find(1);

        $this->call('GET', route('products.show', $product->hash));
        $this->assertTrue($this->client->getResponse()->isOk());
    }
}
