<?php

namespace Squarenetmedia\SecureLogin\Tests;

use Orchestra\Testbench\TestCase;
use Squarenetmedia\SecureLogin\SecureLoginServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [SecureLoginServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
