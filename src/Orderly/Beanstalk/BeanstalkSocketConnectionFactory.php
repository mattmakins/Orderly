<?php
namespace Orderly\Beanstalk;

use Orderly\ConnectionFactoryInterface;

class BeanstalkSocketConnectionFactory implements ConnectionFactoryInterface
{
    public function getConnection() {

        return new BeanstalkSocketConnection();
    }
}