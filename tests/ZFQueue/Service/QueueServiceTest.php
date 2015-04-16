<?php
namespace ZFQueue\Service;

use OpenCloud\Queues\Resource\Queue;
use RuntimeException;
use ZFQueue\Beanstalk\BeanstalkQueueFactory;
use ZFQueue\Rackspace\RackspaceQueueFactory;
use ZFQueue\Service\QueueService;

class QueueServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Queue
     */
    private $configuredRackspaceQueue;
    
    public function setup()
    {
//        $config = include __DIR__ . '/../../../config/orderly.local.php';
        
//        $factory = new RackspaceQueueFactory(
//            $config['rackspace']['username'], $config['rackspace']['api_key']);
        
//        $this->configuredRackspaceQueue = $factory->getQueue(
//            'provider-bulk-course-add-queue');
    }    
    
    /**
     * @expectedException RuntimeException
     */
    public function testThrowsExceptionWhenGettingQueueIfQueueFactoryNotSet()
    {
        $qs = new QueueService();
        $qs->getQueue('queue-name');
    }
    
    public function testGetBeanstalkQueue()
    {
        $qs = new QueueService();
        
        $qs->setQueueFactory(new BeanstalkQueueFactory());
                
        $this->assertInstanceOf('ZFQueue\Beanstalk\BeanstalkQueue', $qs->getQueue(
            'queue-name'));
    }
    
    public function testGetRackspaceQueue()
    {
        $this->markTestIncomplete();
        
        $qs = new QueueService();
        
        $config = include __DIR__ . '/../../../config/orderly.local.php';
        
        $qs->setQueueFactory(new RackspaceQueueFactory(
            $config['rackspace']['username'], $config['rackspace']['api_key']));
        
        $this->assertInstanceOf('OpenCloud\Queues\Resource\Queue', $qs->getQueue(
            'provider-bulk-course-add-queue'));
    }
    
    public function testAddToQueue()
    {
        $this->markTestIncomplete();
        
        $this->configuredRackspaceQueue->createMessage(array(
            'body' => (object) array(
                'message' => 'test queue item',
            ),
            'ttl' => 1209600,
        ));
        
        while ($message = $this->configuredRackspaceQueue->listMessages()->next()) {
            echo $message->getId() . PHP_EOL;
        }

//        $this->assertEquals(0, $this->configuredRackspaceQueue->listMessages());
    }
}