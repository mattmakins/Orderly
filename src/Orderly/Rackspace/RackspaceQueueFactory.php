<?php
namespace Orderly\Rackspace;

use OpenCloud\Rackspace;
use Orderly\QueueFactoryInterface;

class RackspaceQueueFactory implements QueueFactoryInterface
{
    private $username;
    
    private $apiKey;
    
    public function __construct($username, $apiKey) {
        
        $this->username = $username;
        
        $this->apiKey = $apiKey;
    }
    
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