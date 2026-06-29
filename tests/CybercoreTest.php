<?php
/**
 * Tests for CyberCore
 */

use PHPUnit\Framework\TestCase;
use Cybercore\Cybercore;

class CybercoreTest extends TestCase {
    private Cybercore $instance;

    protected function setUp(): void {
        $this->instance = new Cybercore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cybercore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
