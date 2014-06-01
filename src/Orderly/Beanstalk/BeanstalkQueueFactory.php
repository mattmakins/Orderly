<?php
namespace Orderly\Beanstalk;

use Orderly\QueueFactoryInterface;

class BeanstalkQueueFactory implements QueueFactoryInterface
{
    public function __construct() {
        
        
    }
    
    public function getQueue($name) {
        return new BeanstalkQueue(new BeanstalkSocketConnection());
    }
}