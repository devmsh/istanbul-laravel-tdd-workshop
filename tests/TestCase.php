<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function open(string $url)
    {
        exec("open $url");

        $this->assertTrue(true);
    }
}
