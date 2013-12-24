<?php

class HomeControllerTest extends TestCase
{

    public function testHomeWithNoSessionData()
    {
        Route::enableFilters();
        $crawler = $this->client->request('GET', route('home'));
        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
        $this->assertEquals(route('provinces.index'), $this->client->getResponse()->headers->get('location'));

    }

    public function testHomeWithSessionData()
    {
        Session::put('province_id', 5);
        $crawler = $this->client->request('GET', route('home'));
        $this->assertTrue($this->client->getResponse()->isOk());
    }
}
