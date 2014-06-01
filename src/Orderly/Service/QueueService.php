<?php
namespace Orderly\Service;

use Orderly\ConnectionFactoryInterface;
use Orderly\QueueFactoryInterface;
use Orderly\QueueInterface;
use RuntimeException;

class QueueService implements QueueFactoryInterface, 
    ConnectionFactoryInterface        
{    
    /*
     * QueueFactoryInterface Implementation
     */
    
    /**
     * @return QueueInterface
     * @throws RuntimeException
     */
    public function getQueue($name) {
        
        if(is_null($this->queueFactory)){
            throw new RuntimeException('queue factory cannot be null when'                    
                . ' getting queue.');
        }
        
        return $this->queueFactory->getQueue($name);
    }
    
    /**
     * @var QueueFactoryInterface
     */
    private $queueFactory;
    
    public function setQueueFactory(QueueFactoryInterface $qf)
    {
        $this->queueFactory = $qf;
    }

    /*
     * ConnectionFactoryInterface Implementation
     */
    
    public function getConnection() {
        
    }

}