<?php
/**
 * Tests for RoughTrine
 */

use PHPUnit\Framework\TestCase;
use Roughtrine\Roughtrine;

class RoughtrineTest extends TestCase {
    private Roughtrine $instance;

    protected function setUp(): void {
        $this->instance = new Roughtrine(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughtrine::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
