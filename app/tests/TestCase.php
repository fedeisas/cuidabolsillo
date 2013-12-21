<?php

use Mockery as m;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{

    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
        DB::connection()->disableQueryLog();
        Mail::pretend(true);
        DB::reconnect('mysql');
    }

    public function teardown()
    {
        m::close();
        Artisan::call('migrate:reset');
    }

    /**
     * Creates the application.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $unitTesting = true;

        $testEnvironment = 'testing';

        return require __DIR__.'/../../bootstrap/start.php';
    }
}
