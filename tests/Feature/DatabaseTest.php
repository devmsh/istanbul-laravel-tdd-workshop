<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * @test
     */
    public function can_arrange_your_data_using_model_factory()
    {

    }

    /**
     * @test
     */
    public function can_arrange_your_data_using_seeders()
    {

    }

    /**
     * @test
     */
    public function for_complex_app_use_laravel_factories_reloaded_package()
    {
        $this->markTestSkipped();
        $this->open('https://github.com/christophrumpel/laravel-factories-reloaded/blob/master/README.md');
    }
}
