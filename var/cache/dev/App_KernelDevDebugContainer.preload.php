<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerCmKA7nv\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerCmKA7nv/RequestPayloadValueResolverGhost3590451.php';
require __DIR__.'/ContainerCmKA7nv/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerCmKA7nv/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerCmKA7nv/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerCmKA7nv/getTwig_Runtime_SerializerService.php';
require __DIR__.'/ContainerCmKA7nv/getTwig_Runtime_ImportmapService.php';
require __DIR__.'/ContainerCmKA7nv/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerCmKA7nv/getTailwind_CssAssetCompilerService.php';
require __DIR__.'/ContainerCmKA7nv/getTailwind_BuilderService.php';
require __DIR__.'/ContainerCmKA7nv/getStimulus_UxControllersTwigRuntimeService.php';
require __DIR__.'/ContainerCmKA7nv/getStimulus_AssetMapper_LoaderJavascriptCompilerService.php';
require __DIR__.'/ContainerCmKA7nv/getStimulus_AssetMapper_ControllersMapGeneratorService.php';
require __DIR__.'/ContainerCmKA7nv/getSession_FactoryService.php';
require __DIR__.'/ContainerCmKA7nv/getServicesResetterService.php';
require __DIR__.'/ContainerCmKA7nv/getSecrets_VaultService.php';
require __DIR__.'/ContainerCmKA7nv/getRouting_LoaderService.php';
require __DIR__.'/ContainerCmKA7nv/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerCmKA7nv/getMonolog_Logger_DeprecationService.php';
require __DIR__.'/ContainerCmKA7nv/getMonolog_Logger_AssetMapperService.php';
require __DIR__.'/ContainerCmKA7nv/getMonolog_LoggerService.php';
require __DIR__.'/ContainerCmKA7nv/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerCmKA7nv/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerCmKA7nv/getErrorControllerService.php';
require __DIR__.'/ContainerCmKA7nv/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerCmKA7nv/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerCmKA7nv/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerCmKA7nv/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerCmKA7nv/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerCmKA7nv/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerCmKA7nv/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerCmKA7nv/getCache_SystemClearerService.php';
require __DIR__.'/ContainerCmKA7nv/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerCmKA7nv/getCache_AppClearerService.php';
require __DIR__.'/ContainerCmKA7nv/getAssetMapper_Importmap_GeneratorService.php';
require __DIR__.'/ContainerCmKA7nv/getAssetMapper_Importmap_ConfigReaderService.php';
require __DIR__.'/ContainerCmKA7nv/getAssetMapper_Compiler_JavascriptImportPathCompilerService.php';
require __DIR__.'/ContainerCmKA7nv/getAssetMapper_Compiler_CssAssetUrlCompilerService.php';
require __DIR__.'/ContainerCmKA7nv/getTemplateControllerService.php';
require __DIR__.'/ContainerCmKA7nv/getRedirectControllerService.php';
require __DIR__.'/ContainerCmKA7nv/getStarshipRepositoryService.php';
require __DIR__.'/ContainerCmKA7nv/getStarshipControllerService.php';
require __DIR__.'/ContainerCmKA7nv/getStarshipApiControllerService.php';
require __DIR__.'/ContainerCmKA7nv/getMainControllerService.php';
require __DIR__.'/ContainerCmKA7nv/get_ServiceLocator_ZN9CGC_Service.php';
require __DIR__.'/ContainerCmKA7nv/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerCmKA7nv/get_ServiceLocator_JUv_ZyjService.php';
require __DIR__.'/ContainerCmKA7nv/get_ServiceLocator_CCjwZaService.php';
require __DIR__.'/ContainerCmKA7nv/get_ServiceLocator_PlZ7N6LService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerCmKA7nv/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfonycasts\TailwindBundle\SymfonycastsTailwindBundle';
$classes[] = 'Symfony\UX\StimulusBundle\StimulusBundle';
$classes[] = 'Symfony\UX\Turbo\TurboBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Monolog\Logger';
$classes[] = 'Symfony\Component\Console\DataCollector\CommandDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpClient\TraceableHttpClient';
$classes[] = 'Symfony\Component\HttpClient\UriTemplateHttpClient';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'current';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpKernel\Debug\VirtualRequestStack';
$classes[] = 'App\Controller\MainController';
$classes[] = 'App\Controller\StarshipApiController';
$classes[] = 'App\Controller\StarshipController';
$classes[] = 'App\Repository\StarshipRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver';
$classes[] = 'Symfony\Component\AssetMapper\AssetMapper';
$classes[] = 'Symfony\Component\AssetMapper\Factory\CachedMappedAssetFactory';
$classes[] = 'Symfony\Component\AssetMapper\Factory\MappedAssetFactory';
$classes[] = 'Symfony\Component\AssetMapper\Path\PublicAssetsPathResolver';
$classes[] = 'Symfony\Component\AssetMapper\AssetMapperCompiler';
$classes[] = 'Symfony\Component\AssetMapper\CompiledAssetMapperConfigReader';
$classes[] = 'Symfony\Component\AssetMapper\Compiler\CssAssetUrlCompiler';
$classes[] = 'Symfony\Component\AssetMapper\Compiler\JavaScriptImportPathCompiler';
$classes[] = 'Symfony\Component\AssetMapper\Compiler\SourceMappingUrlsCompiler';
$classes[] = 'Symfony\Component\AssetMapper\AssetMapperDevServerSubscriber';
$classes[] = 'Symfony\Component\AssetMapper\ImportMap\ImportMapConfigReader';
$classes[] = 'Symfony\Component\AssetMapper\ImportMap\ImportMapGenerator';
$classes[] = 'Symfony\Component\AssetMapper\ImportMap\RemotePackageStorage';
$classes[] = 'Symfony\Component\AssetMapper\AssetMapperRepository';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\AssetMapper\MapperAwareAssetPackage';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\DebugLoggerConfigurator';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Processor\DebugProcessor';
$classes[] = 'Symfony\Component\Serializer\Debug\TraceableSerializer';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Debug\TraceableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Debug\TraceableEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Serializer\DataCollector\SerializerDataCollector';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AttributeLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\UX\StimulusBundle\AssetMapper\ControllersMapGenerator';
$classes[] = 'Symfony\UX\StimulusBundle\AssetMapper\AutoImportLocator';
$classes[] = 'Symfony\UX\StimulusBundle\AssetMapper\StimulusLoaderJavaScriptCompiler';
$classes[] = 'Symfony\UX\StimulusBundle\Ux\UxPackageReader';
$classes[] = 'Symfony\UX\StimulusBundle\Twig\UxControllersTwigRuntime';
$classes[] = 'Symfonycasts\TailwindBundle\TailwindBuilder';
$classes[] = 'Symfonycasts\TailwindBundle\AssetMapper\TailwindCssAssetCompiler';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ImportMapExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension';
$classes[] = 'Symfony\UX\StimulusBundle\Twig\UxControllersTwigExtension';
$classes[] = 'Symfony\UX\Turbo\Twig\TwigExtension';
$classes[] = 'Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension';
$classes[] = 'Symfony\UX\StimulusBundle\Helper\StimulusHelper';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpFoundation\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\ImportMapRuntime';
$classes[] = 'Symfony\Component\AssetMapper\ImportMap\ImportMapRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);
