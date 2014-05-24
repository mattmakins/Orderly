<?php
namespace Orderly;

interface ConnectionInterface
{
    public function getHostname();
    
    public function getPort();
    
    public function getErrno();
    
    public function getErrStr();
    
    public function getTimeout();    
}