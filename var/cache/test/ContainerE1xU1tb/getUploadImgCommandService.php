<?php

namespace ContainerE1xU1tb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploadImgCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Command\UploadImgCommand' shared autowired service.
     *
     * @return \App\Command\UploadImgCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/UploadImgCommand.php';

        $container->privates['App\\Command\\UploadImgCommand'] = $instance = new \App\Command\UploadImgCommand(($container->privates['App\\Helper\\FileHelper'] ?? $container->load('getFileHelperService')), ($container->privates['App\\Service\\InnerUploader'] ?? $container->load('getInnerUploaderService')));

        $instance->setName('app:upload-img');
        $instance->setDescription('CLI app for uploading images');

        return $instance;
    }
}
