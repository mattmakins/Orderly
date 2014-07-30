<?php
namespace ZFQueue\Adapter;

use OpenCloud\Rackspace;

class RackspaceAdapter implements AdapterInterface
{
    private $username;
    
    private $apiKey;
    
    private $endpoint = Rackspace::UK_IDENTITY_ENDPOINT;
    
    public function __construct($username, $apiKey)
    {
        if(!is_string($username)){
            throw new \InvalidArgumentException('rackspace client username'
                . ' cannot be null and must be a string');
        }
        
        if(!is_string($apiKey)){
            
        }
        
        $this->username = $username;        
    }
    
    public function getClient()
    {
        $client = new Rackspace($this->endpoint, array(
            'username' => $this->username,
            'apiKey' => $this->apiKey,
        ));
                        
        $client->authenticate();
        
        $qs = $client->queuesService();
        $qs->setClientId();        
    }
    
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }
}