<?php
namespace ZFQueue\Adapter;

class RackspacAdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testThrowsExceptionIfUsernameAndApiKeyNotSet()
    {
        try {
            new RackspaceAdapter(null, null);
            $this->fail();
        } catch (\InvalidArgumentException $e) {
            // expected
        }
    }
}