<?php
namespace ZFQueue;

interface ConnectionInterface
{
    public function getHostname();
    
    public function getPort();
    
    public function getErrno();
    
    public function getErrStr();
    
    public function getTimeout();    
}