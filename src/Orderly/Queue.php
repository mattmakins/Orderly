<?php
namespace Orderly;

/**
 * Queue class responsible for manageing the queue.
 * 
 * This class is queue framework agnostic and expects to have access
 * to a configured connection factory.
 */
class Queue implements ConnectionFactoryInterface
{
    /*
     * ConnectionFactoryInterface Implementation
     */
        
    public function getConnection() {
        
    }
    
    /**
     * @var ConnectionFactoryInterface
     */
    private $connectionFactory;

    public function setConnectionFactory(ConnectionFactoryInterface $cf)
    {
        $this->connectionFactory = $cf;
    }
}