<?php
/**
 * Tests for DataAugment
 */

use PHPUnit\Framework\TestCase;
use Dataaugment\Dataaugment;

class DataaugmentTest extends TestCase {
    private Dataaugment $instance;

    protected function setUp(): void {
        $this->instance = new Dataaugment(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dataaugment::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
