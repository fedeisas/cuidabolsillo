<?php

class StaticControllerTest extends TestCase
{
    use Way\Tests\ControllerHelpers;

    public function setUp()
    {
        parent::setUp();
    }

    public function testAboutPage()
    {
        $this->call('GET', route('about'));
        $this->see('CuidaBolsillo');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testPrivacyPage()
    {
        $this->call('GET', route('terms'));
        $this->see('Términos');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testTermsPage()
    {
        $this->call('GET', route('privacy'));
        $this->see('Privacidad');
        $this->assertTrue($this->client->getResponse()->isOk());
    }
}
