<?php
namespace ZFQueue\Adapter;

interface AdapterInterface
{
    /**
     * Gets the client that hosts the queue.
     */
    public function getClient();
}