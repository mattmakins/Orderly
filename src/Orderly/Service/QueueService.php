<?php
namespace Orderly\Service;

use Orderly\QueueFactoryInterface;
use Orderly\QueueInterface;
use RuntimeException;

class QueueService implements QueueFactoryInterface
{    
    /*
     * QueueFactoryInterface Implementation
     */
    
    /**
     * @return QueueInterface
     * @throws RuntimeException
     */
    public function getQueue() {
        
        if(is_null($this->queueFactory)){
            throw new RuntimeException('queue factory cannot be null when'                    
                . ' getting queue.');
        }
        
        return $this->queueFactory->getQueue();
    }
    
    /**
     * @var QueueFactoryInterface
     */
    private $queueFactory;
    
    public function setQueueFactory(QueueFactoryInterface $qf)
    {
        $this->queueFactory = $qf;
    }
}