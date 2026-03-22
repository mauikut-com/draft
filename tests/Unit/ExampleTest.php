<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Test basic string manipulation.
     */
    public function test_string_manipulation(): void
    {
        $string = 'Hello Laravel';
        $this->assertStringContainsString('Laravel', $string);
        $this->assertEquals(13, strlen($string));
    }

    /**
     * Test basic array operations.
     */
    public function test_array_operations(): void
    {
        $array = ['apple', 'banana', 'cherry'];
        $this->assertCount(3, $array);
        $this->assertContains('banana', $array);
        $this->assertNotContains('orange', $array);
    }
}
