<?php

namespace ContainerE1xU1tb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_PrivateServicesLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Command\\RemoveImgCommand' => ['privates', 'App\\Command\\RemoveImgCommand', 'getRemoveImgCommandService', true],
            'App\\Command\\UploadImgCommand' => ['privates', 'App\\Command\\UploadImgCommand', 'getUploadImgCommandService', true],
            'App\\Helper\\FileHelper' => ['privates', 'App\\Helper\\FileHelper', 'getFileHelperService', true],
            'App\\Service\\InnerUploader' => ['privates', 'App\\Service\\InnerUploader', 'getInnerUploaderService', true],
            'controller_resolver' => ['privates', 'controller_resolver', 'getControllerResolverService', false],
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver' => ['privates', 'argument_resolver', 'getArgumentResolverService', false],
            'argument_resolver.request_attribute' => ['privates', 'argument_resolver.request_attribute', 'getArgumentResolver_RequestAttributeService', true],
            'argument_resolver.request' => ['privates', 'argument_resolver.request', 'getArgumentResolver_RequestService', true],
            'argument_resolver.session' => ['privates', 'argument_resolver.session', 'getArgumentResolver_SessionService', true],
            'argument_resolver.service' => ['privates', 'argument_resolver.service', 'getArgumentResolver_ServiceService', true],
            'argument_resolver.default' => ['privates', 'argument_resolver.default', 'getArgumentResolver_DefaultService', true],
            'argument_resolver.variadic' => ['privates', 'argument_resolver.variadic', 'getArgumentResolver_VariadicService', true],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
            'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListenerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'cache_clearer' => ['services', '.container.private.cache_clearer', 'get_Container_Private_CacheClearerService', true],
            'filesystem' => ['services', '.container.private.filesystem', 'get_Container_Private_FilesystemService', true],
            'file_locator' => ['privates', 'file_locator', 'getFileLocatorService', true],
            'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
            'dependency_injection.config.container_parameters_resource_checker' => ['privates', 'dependency_injection.config.container_parameters_resource_checker', 'getDependencyInjection_Config_ContainerParametersResourceCheckerService', true],
            'config.resource.self_checking_resource_checker' => ['privates', 'config.resource.self_checking_resource_checker', 'getConfig_Resource_SelfCheckingResourceCheckerService', true],
            'locale_aware_listener' => ['privates', 'locale_aware_listener', 'getLocaleAwareListenerService', false],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'container.getenv' => ['privates', 'container.getenv', 'getContainer_GetenvService', true],
            'config_builder.warmer' => ['privates', 'config_builder.warmer', 'getConfigBuilder_WarmerService', true],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'console.error_listener' => ['privates', 'console.error_listener', 'getConsole_ErrorListenerService', true],
            'console.suggest_missing_package_subscriber' => ['privates', 'console.suggest_missing_package_subscriber', 'getConsole_SuggestMissingPackageSubscriberService', true],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', true],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', true],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', true],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', true],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', true],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', true],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', true],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', true],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', true],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', true],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', true],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', true],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', true],
            'console.command.dotenv_debug' => ['privates', 'console.command.dotenv_debug', 'getConsole_Command_DotenvDebugService', true],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', true],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', true],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', true],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', true],
            'console.command.translation_extract' => ['privates', 'console.command.translation_extract', 'getConsole_Command_TranslationExtractService', true],
            'console.command.translation_pull' => ['privates', 'console.command.translation_pull', 'getConsole_Command_TranslationPullService', true],
            'console.command.translation_push' => ['privates', 'console.command.translation_push', 'getConsole_Command_TranslationPushService', true],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', true],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', true],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', true],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', true],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', true],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', true],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', true],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', true],
            'identity_translator' => ['privates', 'identity_translator', 'getIdentityTranslatorService', true],
            'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService', true],
            'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService', true],
            'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'translator.default' => ['services', 'translator', 'getTranslatorService', true],
            'translator.formatter.default' => ['privates', 'translator.formatter.default', 'getTranslator_Formatter_DefaultService', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', true],
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', true],
            'translation.dumper.php' => ['privates', 'translation.dumper.php', 'getTranslation_Dumper_PhpService', true],
            'translation.dumper.xliff' => ['privates', 'translation.dumper.xliff', 'getTranslation_Dumper_XliffService', true],
            'translation.dumper.po' => ['privates', 'translation.dumper.po', 'getTranslation_Dumper_PoService', true],
            'translation.dumper.mo' => ['privates', 'translation.dumper.mo', 'getTranslation_Dumper_MoService', true],
            'translation.dumper.yml' => ['privates', 'translation.dumper.yml', 'getTranslation_Dumper_YmlService', true],
            'translation.dumper.yaml' => ['privates', 'translation.dumper.yaml', 'getTranslation_Dumper_YamlService', true],
            'translation.dumper.qt' => ['privates', 'translation.dumper.qt', 'getTranslation_Dumper_QtService', true],
            'translation.dumper.csv' => ['privates', 'translation.dumper.csv', 'getTranslation_Dumper_CsvService', true],
            'translation.dumper.ini' => ['privates', 'translation.dumper.ini', 'getTranslation_Dumper_IniService', true],
            'translation.dumper.json' => ['privates', 'translation.dumper.json', 'getTranslation_Dumper_JsonService', true],
            'translation.dumper.res' => ['privates', 'translation.dumper.res', 'getTranslation_Dumper_ResService', true],
            'translation.extractor.php' => ['privates', 'translation.extractor.php', 'getTranslation_Extractor_PhpService', true],
            'translation.reader' => ['privates', 'translation.reader', 'getTranslation_ReaderService', true],
            'translation.extractor' => ['privates', 'translation.extractor', 'getTranslation_ExtractorService', true],
            'translation.writer' => ['privates', 'translation.writer', 'getTranslation_WriterService', true],
            'translation.warmer' => ['privates', 'translation.warmer', 'getTranslation_WarmerService', true],
            'translation.provider_collection' => ['privates', 'translation.provider_collection', 'getTranslation_ProviderCollectionService', true],
            'translation.provider_collection_factory' => ['privates', 'translation.provider_collection_factory', 'getTranslation_ProviderCollectionFactoryService', true],
            'translation.provider_factory.null' => ['privates', 'translation.provider_factory.null', 'getTranslation_ProviderFactory_NullService', true],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', true],
            'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService', true],
            'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService', true],
            'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService', true],
            'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService', true],
            'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService', true],
            'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService', true],
            'routing.loader.container' => ['privates', 'routing.loader.container', 'getRouting_Loader_ContainerService', true],
            'router.default' => ['services', 'router', 'getRouterService', false],
            'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService', true],
            'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', true],
            'secrets.decryption_key' => ['privates', 'secrets.decryption_key', 'getSecrets_DecryptionKeyService', true],
            'secrets.local_vault' => ['privates', 'secrets.local_vault', 'getSecrets_LocalVaultService', true],
            'session.factory' => ['privates', 'session.factory', 'getSession_FactoryService', true],
            'session.storage.factory.mock_file' => ['privates', 'session.storage.factory.mock_file', 'getSession_Storage_Factory_MockFileService', true],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
            'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', true],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', true],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', true],
            'Symfony\\Component\\Filesystem\\Filesystem' => ['services', '.container.private.filesystem', 'get_Container_Private_FilesystemService', true],
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService', true],
            'Symfony\\Component\\String\\Slugger\\SluggerInterface' => ['privates', 'slugger', 'getSluggerService', true],
            'error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'error_renderer' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'Psr\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', true],
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService', true],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', true],
            'Symfony\\Contracts\\Translation\\TranslatorInterface' => ['services', 'translator', 'getTranslatorService', true],
            'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => ['privates', 'translation.reader', 'getTranslation_ReaderService', true],
            'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => ['privates', 'translation.extractor', 'getTranslation_ExtractorService', true],
            'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => ['privates', 'translation.writer', 'getTranslation_WriterService', true],
            'translator.formatter' => ['privates', 'translator.formatter.default', 'getTranslator_Formatter_DefaultService', true],
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', true],
            'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => ['services', '.container.private.session', 'get_Container_Private_SessionService', true],
            'session.storage.factory' => ['privates', 'session.storage.factory.mock_file', 'getSession_Storage_Factory_MockFileService', true],
            'session_listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.zxMugcL', 'get_ServiceLocator_ZxMugcLService', true],
            'Psr\\Log\\LoggerInterface' => ['privates', 'logger', 'getLoggerService', false],
        ], [
            'App\\Command\\RemoveImgCommand' => '?',
            'App\\Command\\UploadImgCommand' => '?',
            'App\\Helper\\FileHelper' => '?',
            'App\\Service\\InnerUploader' => '?',
            'controller_resolver' => '?',
            'argument_metadata_factory' => '?',
            'argument_resolver' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.variadic' => '?',
            'response_listener' => '?',
            'streamed_response_listener' => '?',
            'locale_listener' => '?',
            'validate_request_listener' => '?',
            'disallow_search_engine_index_response_listener' => '?',
            'exception_listener' => '?',
            'parameter_bag' => '?',
            'cache_clearer' => '?',
            'filesystem' => '?',
            'file_locator' => '?',
            'config_cache_factory' => '?',
            'dependency_injection.config.container_parameters_resource_checker' => '?',
            'config.resource.self_checking_resource_checker' => '?',
            'locale_aware_listener' => '?',
            'container.env_var_processor' => '?',
            'slugger' => '?',
            'container.getenv' => '?',
            'config_builder.warmer' => '?',
            'error_handler.error_renderer.html' => '?',
            'console.error_listener' => '?',
            'console.suggest_missing_package_subscriber' => '?',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.dotenv_debug' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.translation_debug' => '?',
            'console.command.translation_extract' => '?',
            'console.command.translation_pull' => '?',
            'console.command.translation_push' => '?',
            'console.command.xliff_lint' => '?',
            'console.command.yaml_lint' => '?',
            'console.command.secrets_set' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'cache.default_marshaller' => '?',
            'cache.default_clearer' => '?',
            'identity_translator' => '?',
            'test.client.history' => '?',
            'test.client.cookiejar' => '?',
            'test.session.listener' => '?',
            'translator.default' => '?',
            'translator.formatter.default' => '?',
            'translation.loader.php' => '?',
            'translation.loader.yml' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.po' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.csv' => '?',
            'translation.loader.res' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.dumper.php' => '?',
            'translation.dumper.xliff' => '?',
            'translation.dumper.po' => '?',
            'translation.dumper.mo' => '?',
            'translation.dumper.yml' => '?',
            'translation.dumper.yaml' => '?',
            'translation.dumper.qt' => '?',
            'translation.dumper.csv' => '?',
            'translation.dumper.ini' => '?',
            'translation.dumper.json' => '?',
            'translation.dumper.res' => '?',
            'translation.extractor.php' => '?',
            'translation.reader' => '?',
            'translation.extractor' => '?',
            'translation.writer' => '?',
            'translation.warmer' => '?',
            'translation.provider_collection' => '?',
            'translation.provider_collection_factory' => '?',
            'translation.provider_factory.null' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.file_link_formatter' => '?',
            'routing.resolver' => '?',
            'routing.loader.xml' => '?',
            'routing.loader.yml' => '?',
            'routing.loader.php' => '?',
            'routing.loader.glob' => '?',
            'routing.loader.directory' => '?',
            'routing.loader.container' => '?',
            'router.default' => '?',
            'router.request_context' => '?',
            'router.cache_warmer' => '?',
            'router_listener' => '?',
            'secrets.vault' => '?',
            'secrets.decryption_key' => '?',
            'secrets.local_vault' => '?',
            'session.factory' => '?',
            'session.storage.factory.mock_file' => '?',
            'logger' => '?',
            'Psr\\Container\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'Symfony\\Component\\Filesystem\\Filesystem' => '?',
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
            'Symfony\\Component\\String\\Slugger\\SluggerInterface' => '?',
            'error_renderer.html' => '?',
            'error_renderer' => '?',
            'Psr\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Contracts\\Translation\\TranslatorInterface' => '?',
            'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => '?',
            'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => '?',
            'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => '?',
            'translator.formatter' => '?',
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
            'Symfony\\Component\\Routing\\RouterInterface' => '?',
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContext' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => '?',
            'session.storage.factory' => '?',
            'session_listener' => '?',
            'argument_resolver.controller_locator' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
        ]);
    }
}
