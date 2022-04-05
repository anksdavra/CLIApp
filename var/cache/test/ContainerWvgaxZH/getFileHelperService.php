<?php

namespace ContainerWvgaxZH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileHelperService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Helper\FileHelper' shared autowired service.
     *
     * @return \App\Helper\FileHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Helper/FileHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/SluggerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/AsciiSlugger.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $container->privates['App\\Helper\\FileHelper'] = new \App\Helper\FileHelper(($container->privates['slugger'] ?? ($container->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en'))), ($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));
    }
}
