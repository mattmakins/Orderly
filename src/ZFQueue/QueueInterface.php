<?php
namespace ZFQueue;

interface QueueInterface
{
    public function add();
    
    public function remove();
    
    public function claim();
}