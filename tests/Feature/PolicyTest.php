<?php

namespace Tests\Feature;

use App\Http\Controllers\ProjectController;
use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\HttpTestAssertions;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    /**
     * @test
     */
    public function test_can_check_policy_applied_to_controller_through_middleware()
    {

    }

    public function test_can_check_policy_methods_directly()
    {

    }
}
