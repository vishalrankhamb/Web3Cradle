<?php
/**
 * Tests for Web3Cradle
 */

use PHPUnit\Framework\TestCase;
use Web3cradle\Web3cradle;

class Web3cradleTest extends TestCase {
    private Web3cradle $instance;

    protected function setUp(): void {
        $this->instance = new Web3cradle(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3cradle::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
