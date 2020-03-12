<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

/**
 * This is not a real test class, it will only open some valuable resources
 * about Laravel testing, you can consider it as a roadmap to develop your
 * testing skills. It's works for me, and it will definitely works for YOU ;)
 */
class WhatsNextTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->markTestSkipped();
    }

    /** @test */
    public function developers_must_read_the_laravel_testing_docs()
    {
        $this->assertDeveloperOpen("https://laravel.com/docs/master/testing");
    }

    /** @test */
    public function developers_must_watch_Test_Driven_Laravel_by_Adam_Wathan()
    {
        $this->assertDeveloperOpen("https://course.testdrivenlaravel.com");
    }

    /** @test */
    public function developers_must_watch_Confident_Laravel_by_Jason_McCreary()
    {
        $this->assertDeveloperOpen("https://confidentlaravel.com/");
    }

    /** @test */
    public function developers_can_follow_testing_skills_by_Laracast()
    {
        $this->assertDeveloperOpen("https://laracasts.com/skills/testing");
    }

    /** @test */
    public function developers_can_generate_tests_for_current_project_using_Laravel_Test_Generator()
    {
        $this->assertDeveloperOpen("https://laravelshift.com/laravel-test-generator");
    }

    private function assertDeveloperOpen(string $url)
    {
        exec("open $url");

        $this->assertTrue(true);
    }
}
