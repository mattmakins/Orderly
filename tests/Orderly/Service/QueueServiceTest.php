<?php
namespace Orderly\Service;

use Orderly\Beanstalk\BeanstalkQueueFactory;
use Orderly\Service\QueueService;
use RuntimeException;

class QueueServiceTest extends \PHPUnit_Framework_TestCase
{
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
                
        $this->assertInstanceOf('Orderly\Beanstalk\BeanstalkQueue', $qs->getQueue(
            'queue-name'));
    }
}