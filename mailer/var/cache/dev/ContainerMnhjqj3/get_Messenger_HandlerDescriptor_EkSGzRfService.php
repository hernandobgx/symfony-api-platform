<?php

namespace ContainerMnhjqj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_EkSGzRfService extends Mailer_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.ekSGzRf' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Messenger/Handler/UserRegisteredMessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.ekSGzRf'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Mailer\Messenger\Handler\UserRegisteredMessageHandler(($container->privates['Mailer\\Service\\Mailer\\MailerService'] ?? $container->load('getMailerServiceService')), $container->getEnv('string:HOST')), []);
    }
}
