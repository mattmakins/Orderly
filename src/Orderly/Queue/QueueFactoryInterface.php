<?php
namespace Orderly;

interface QueueFactoryInterface
{
    /**
     * @param name name of the queue
     * @return the queue identified by the given name
     */
    public function getQueue($name);
}