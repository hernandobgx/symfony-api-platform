<?php

namespace ContainerPnDD2Jv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_MultiplierRetryStrategy_AmqpUserService extends Mailer_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.retry.multiplier_retry_strategy.amqp_user' shared service.
     *
     * @return \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Retry/RetryStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Retry/MultiplierRetryStrategy.php';

        return $container->privates['messenger.retry.multiplier_retry_strategy.amqp_user'] = new \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy(1, 1000, 1, 0);
    }
}
