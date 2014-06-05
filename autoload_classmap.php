<?php
return array(
    'Orderly\Service\QueueService' => __DIR__ . '/src/Orderly/Service/QueueService.php',
    
    'Orderly\Beanstalk\BeanstalkQueue' => __DIR__ . 'src/Orderly/Beanstalk/BeanstalkQueue.php',
    'Orderly\Beanstalk\BeanstalkQueueFactory' => __DIR__ . 'src/Orderly/Beanstalk/BeanstalkQueueFactory.php',
    'Orderly\Beanstalk\BeanstalkSocketConnection' => __DIR__ . 'src/Orderly/Beanstalk/BeanstalkSocketConnection.php',
    'Orderly\Beanstalk\BeanstalkSocketConnectionFactory' => __DIR__ . 'src/Orderly/Beanstalk/BeanstalkSocketConnectionFactory.php',
    
    'Orderly\Queue\QueueFactoryInterface' => __DIR__ . '/src/Orderly/Queue/QueueFactoryInterface.php',
    'Orderly\Queue\QueueInterface' => __DIR__ . '/src/Orderly/Queue/QueueInterface.php',
    
    'Orderly\Rackspace\RackspaceQueueFactory' => __DIR__ . '/src/Orderly/Rackspace/RackspaceQueueFactory.php',
);