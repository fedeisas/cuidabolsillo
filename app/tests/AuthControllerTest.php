<?php

class AuthControllerTest extends TestCase
{
    use Way\Tests\ControllerHelpers;

    public function setUp()
    {
        parent::setUp();
        Route::enableFilters();
    }

    public function testLoginScreen()
    {
        $this->call('GET', route('auth.login.get'));
        $this->see('Login');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testLoginSubmitWithGoodCredentials()
    {
        $this->call(
            'POST',
            route('auth.login.get'),
            array(
                '_token' => csrf_token(),
                'email' => 'admin@cuidabolsillo.com',
                'password' => 'password'
            )
        );

        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
        $this->assertEquals(route('admin_dashboard'), $this->client->getResponse()->headers->get('location'));
        $this->assertFalse($this->client->getResponse()->isOk());
    }

    public function testLoginSubmitWithBadCredentials()
    {
        $this->call(
            'POST',
            route('auth.login.get'),
            array(
                '_token' => csrf_token(),
                'email' => 'admin@cuidabolsillo.com',
                'password' => 'asd'
            )
        );

        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
        $this->assertEquals(route('auth.login.get'), $this->client->getResponse()->headers->get('location'));
        $this->assertFalse($this->client->getResponse()->isOk());
        $this->assertTrue(Session::has('message'));
    }

    public function testLogout()
    {
        $this->call('GET', route('auth.logout.get'));

        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
        $this->assertEquals(route('home'), $this->client->getResponse()->headers->get('location'));
        $this->assertFalse($this->client->getResponse()->isOk());
    }
}
