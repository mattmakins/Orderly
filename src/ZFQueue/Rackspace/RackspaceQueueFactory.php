<?php
namespace Orderly\Rackspace;

use OpenCloud\Rackspace;
use Orderly\Queue\QueueFactoryInterface;

class RackspaceQueueFactory implements QueueFactoryInterface
{
    private $username;
    
    private $apiKey;
    
    public function __construct($username, $apiKey) {
        
        $this->username = $username;
        
        $this->apiKey = $apiKey;
    }
    
    /**
     * 
     * @param string $name
     * @return OpenCloud\Queues\Resource\Queue
     */
    public function getQueue($name) 
    {
        $client = new Rackspace(Rackspace::UK_IDENTITY_ENDPOINT, array(
            'username' => $this->username,
            'apiKey' => $this->apiKey,
        ));
                        
        $client->authenticate();
        
        $qs = $client->queuesService();
        $qs->setClientId();
        
        return $qs->getQueue($name);
    }
}