<?php
/**
 * Tests for TraefikRouter
 */

use PHPUnit\Framework\TestCase;
use Traefikrouter\Traefikrouter;

class TraefikrouterTest extends TestCase {
    private Traefikrouter $instance;

    protected function setUp(): void {
        $this->instance = new Traefikrouter(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Traefikrouter::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
