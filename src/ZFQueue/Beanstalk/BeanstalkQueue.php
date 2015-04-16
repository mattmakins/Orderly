<?php
namespace ZFQueue\Beanstalk;

use ZFQueue\Queue\QueueInterface;

class BeanstalkQueue implements QueueInterface
{
    /**
     * @var BeanstalkSocketConnection
     */
    private $connection;
    
    public function __construct(BeanstalkSocketConnection $connection) 
    {
        $this->connection = $connection;
    }
}