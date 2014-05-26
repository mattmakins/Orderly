<?php
namespace Orderly\Beanstalk;

use Orderly\QueueFactoryInterface;

class BeanstalkQueueFactory implements QueueFactoryInterface
{
    public function getQueue() {
        return new BeanstalkQueue();
    }
}