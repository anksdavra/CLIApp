<?php

namespace ContainerE1xU1tb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveImgCommand_LazyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.App\Command\RemoveImgCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\RemoveImgCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:remove-img', [], 'Add a short description for your command', false, function () use ($container): \App\Command\RemoveImgCommand {
            return ($container->privates['App\\Command\\RemoveImgCommand'] ?? $container->load('getRemoveImgCommandService'));
        });
    }
}
