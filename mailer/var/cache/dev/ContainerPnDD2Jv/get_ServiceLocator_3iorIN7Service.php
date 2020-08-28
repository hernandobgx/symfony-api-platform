<?php

namespace ContainerPnDD2Jv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3iorIN7Service extends Mailer_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3iorIN7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3iorIN7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'amqp_user' => ['privates', 'messenger.transport.amqp_user', 'getMessenger_Transport_AmqpUserService', true],
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
            'messenger.transport.amqp_user' => ['privates', 'messenger.transport.amqp_user', 'getMessenger_Transport_AmqpUserService', true],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'amqp_user' => '?',
            'failed' => '?',
            'messenger.transport.amqp_user' => '?',
            'messenger.transport.failed' => '?',
        ]);
    }
}
