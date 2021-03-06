<?php
namespace Orderly\Rackspace;

class RackspaceQueueFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $config = include __DIR__ . '/../../../config/orderly.local.php';
        
        $rsqf = new RackspaceQueueFactory($config['rackspace']['username'], 
            $config['rackspace']['api_key']);
        
        $queue = $rsqf->getQueue('provider-bulk-course-add-queue');
        
        $this->assertInstanceOf('OpenCloud\Queues\Resource\Queue', $queue);
    }
}