<?php
namespace ZFQueue\Beanstalk;

use ZFQueue\ConnectionFactoryInterface;

class BeanstalkSocketConnectionFactory implements ConnectionFactoryInterface
{
    public function getConnection() {

        return new BeanstalkSocketConnection();
    }
}