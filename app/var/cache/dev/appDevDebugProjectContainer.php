<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'autowired.riverway\\cms\\corebundle\\entity\\article' => 'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Article',
            'autowired.riverway\\cms\\corebundle\\entity\\sidebar' => 'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Sidebar',
            'autowired.riverway\\cms\\corebundle\\entity\\tag' => 'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Tag',
            'riverway\\cms\\corebundle\\controller\\admin\\articlecontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController',
            'riverway\\cms\\corebundle\\controller\\admin\\categorycontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\CategoryController',
            'riverway\\cms\\corebundle\\controller\\admin\\imageuploadcontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ImageUploadController',
            'riverway\\cms\\corebundle\\controller\\admin\\menucontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\MenuController',
            'riverway\\cms\\corebundle\\controller\\admin\\sidebarcontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\SidebarController',
            'riverway\\cms\\corebundle\\controller\\admin\\tagcontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\TagController',
            'riverway\\cms\\corebundle\\controller\\admin\\widgetcontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\WidgetController',
            'riverway\\cms\\corebundle\\controller\\front\\contentcontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Front\\ContentController',
            'riverway\\cms\\corebundle\\controller\\front\\searchcontroller' => 'Riverway\\Cms\\CoreBundle\\Controller\\Front\\SearchController',
            'riverway\\cms\\corebundle\\eventlistener\\exceptionlistener' => 'Riverway\\Cms\\CoreBundle\\EventListener\\ExceptionListener',
            'riverway\\cms\\corebundle\\form\\articletype' => 'Riverway\\Cms\\CoreBundle\\Form\\ArticleType',
            'riverway\\cms\\corebundle\\form\\categorytype' => 'Riverway\\Cms\\CoreBundle\\Form\\CategoryType',
            'riverway\\cms\\corebundle\\form\\editorwidgettype' => 'Riverway\\Cms\\CoreBundle\\Form\\EditorWidgetType',
            'riverway\\cms\\corebundle\\form\\extension\\imagetypeextension' => 'Riverway\\Cms\\CoreBundle\\Form\\Extension\\ImageTypeExtension',
            'riverway\\cms\\corebundle\\form\\extension\\imperavitype' => 'Riverway\\Cms\\CoreBundle\\Form\\Extension\\ImperaviType',
            'riverway\\cms\\corebundle\\form\\sidebartype' => 'Riverway\\Cms\\CoreBundle\\Form\\SidebarType',
            'riverway\\cms\\corebundle\\form\\widgetsequencetype' => 'Riverway\\Cms\\CoreBundle\\Form\\WidgetSequenceType',
            'riverway\\cms\\corebundle\\form\\widgettype' => 'Riverway\\Cms\\CoreBundle\\Form\\WidgetType',
            'riverway\\cms\\corebundle\\service\\articlerenderer' => 'Riverway\\Cms\\CoreBundle\\Service\\ArticleRenderer',
            'riverway\\cms\\corebundle\\service\\filemanager' => 'Riverway\\Cms\\CoreBundle\\Service\\FileManager',
            'riverway\\cms\\corebundle\\widget\\widgetregistry' => 'Riverway\\Cms\\CoreBundle\\Widget\\WidgetRegistry',
        );
        $this->methodMap = array(
            '1_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf' => 'get159d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bfService',
            '2_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf' => 'get259d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bfService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController' => 'getRiverway_Cms_CoreBundle_Controller_Admin_ArticleControllerService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\CategoryController' => 'getRiverway_Cms_CoreBundle_Controller_Admin_CategoryControllerService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ImageUploadController' => 'getRiverway_Cms_CoreBundle_Controller_Admin_ImageUploadControllerService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\MenuController' => 'getRiverway_Cms_CoreBundle_Controller_Admin_MenuControllerService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\SidebarController' => 'getRiverway_Cms_CoreBundle_Controller_Admin_SidebarControllerService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\TagController' => 'getRiverway_Cms_CoreBundle_Controller_Admin_TagControllerService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\WidgetController' => 'getRiverway_Cms_CoreBundle_Controller_Admin_WidgetControllerService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Front\\ContentController' => 'getRiverway_Cms_CoreBundle_Controller_Front_ContentControllerService',
            'Riverway\\Cms\\CoreBundle\\Controller\\Front\\SearchController' => 'getRiverway_Cms_CoreBundle_Controller_Front_SearchControllerService',
            'Riverway\\Cms\\CoreBundle\\EventListener\\ExceptionListener' => 'getRiverway_Cms_CoreBundle_EventListener_ExceptionListenerService',
            'Riverway\\Cms\\CoreBundle\\Form\\ArticleType' => 'getRiverway_Cms_CoreBundle_Form_ArticleTypeService',
            'Riverway\\Cms\\CoreBundle\\Form\\CategoryType' => 'getRiverway_Cms_CoreBundle_Form_CategoryTypeService',
            'Riverway\\Cms\\CoreBundle\\Form\\EditorWidgetType' => 'getRiverway_Cms_CoreBundle_Form_EditorWidgetTypeService',
            'Riverway\\Cms\\CoreBundle\\Form\\Extension\\ImageTypeExtension' => 'getRiverway_Cms_CoreBundle_Form_Extension_ImageTypeExtensionService',
            'Riverway\\Cms\\CoreBundle\\Form\\Extension\\ImperaviType' => 'getRiverway_Cms_CoreBundle_Form_Extension_ImperaviTypeService',
            'Riverway\\Cms\\CoreBundle\\Form\\SidebarType' => 'getRiverway_Cms_CoreBundle_Form_SidebarTypeService',
            'Riverway\\Cms\\CoreBundle\\Form\\WidgetSequenceType' => 'getRiverway_Cms_CoreBundle_Form_WidgetSequenceTypeService',
            'Riverway\\Cms\\CoreBundle\\Form\\WidgetType' => 'getRiverway_Cms_CoreBundle_Form_WidgetTypeService',
            'Riverway\\Cms\\CoreBundle\\Service\\ArticleRenderer' => 'getRiverway_Cms_CoreBundle_Service_ArticleRendererService',
            'Riverway\\Cms\\CoreBundle\\Service\\FileManager' => 'getRiverway_Cms_CoreBundle_Service_FileManagerService',
            'Riverway\\Cms\\CoreBundle\\Widget\\WidgetRegistry' => 'getRiverway_Cms_CoreBundle_Widget_WidgetRegistryService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService',
            'argument_resolver.request' => 'getArgumentResolver_RequestService',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService',
            'argument_resolver.session' => 'getArgumentResolver_SessionService',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Article' => 'getAutowired_Riverway_Cms_CoreBundle_Entity_ArticleService',
            'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Sidebar' => 'getAutowired_Riverway_Cms_CoreBundle_Entity_SidebarService',
            'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Tag' => 'getAutowired_Riverway_Cms_CoreBundle_Entity_TagService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.annotations.recorder_inner' => 'getCache_Annotations_RecorderInnerService',
            'cache.app' => 'getCache_AppService',
            'cache.app.recorder_inner' => 'getCache_App_RecorderInnerService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.serializer.recorder_inner' => 'getCache_Serializer_RecorderInnerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system.recorder_inner' => 'getCache_System_RecorderInnerService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache.validator.recorder_inner' => 'getCache_Validator_RecorderInnerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'console.command.riverway_cms_corebundle_command_fixturesreloadcommand' => 'getConsole_Command_RiverwayCmsCorebundleCommandFixturesreloadcommandService',
            'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerruncommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstartcommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstatuscommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstopcommandService',
            'console.error_listener' => 'getConsole_ErrorListenerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache' => 'getDoctrineCacheService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fos_rest.access_denied_listener' => 'getFosRest_AccessDeniedListenerService',
            'fos_rest.allowed_methods_listener' => 'getFosRest_AllowedMethodsListenerService',
            'fos_rest.allowed_methods_loader' => 'getFosRest_AllowedMethodsLoaderService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector' => 'getFosRest_InflectorService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.serializer' => 'getFosRest_SerializerService',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'guzzle_bundle.formatter' => 'getGuzzleBundle_FormatterService',
            'guzzle_bundle.logger' => 'getGuzzleBundle_LoggerService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.accessor_strategy' => 'getJmsSerializer_AccessorStrategyService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.expression_evaluator' => 'getJmsSerializer_ExpressionEvaluatorService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.binary.loader.prototype.filesystem' => 'getLiipImagine_Binary_Loader_Prototype_FilesystemService',
            'liip_imagine.binary.loader.prototype.stream' => 'getLiipImagine_Binary_Loader_Prototype_StreamService',
            'liip_imagine.binary.mime_type_guesser' => 'getLiipImagine_Binary_MimeTypeGuesserService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.extension_guesser' => 'getLiipImagine_ExtensionGuesserService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.auto_rotate' => 'getLiipImagine_Filter_Loader_AutoRotateService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resample' => 'getLiipImagine_Filter_Loader_ResampleService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.loader.scale' => 'getLiipImagine_Filter_Loader_ScaleService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.filter.post_processor.jpegoptim' => 'getLiipImagine_Filter_PostProcessor_JpegoptimService',
            'liip_imagine.filter.post_processor.mozjpeg' => 'getLiipImagine_Filter_PostProcessor_MozjpegService',
            'liip_imagine.filter.post_processor.optipng' => 'getLiipImagine_Filter_PostProcessor_OptipngService',
            'liip_imagine.filter.post_processor.pngquant' => 'getLiipImagine_Filter_PostProcessor_PngquantService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.mime_type_guesser' => 'getLiipImagine_MimeTypeGuesserService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.handler.server_log' => 'getMonolog_Handler_ServerLogService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'pagerfanta.convert_not_valid_current_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService',
            'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'riverway.grid' => 'getRiverway_GridService',
            'riverway.twig.extension.grid' => 'getRiverway_Twig_Extension_GridService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService',
            'security.authentication.provider.dao.main' => 'getSecurity_Authentication_Provider_Dao_MainService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => 'getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService',
            'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' => 'getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user.provider.concrete.in_memory' => 'getSecurity_User_Provider_Concrete_InMemoryService',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'sentry.client' => 'getSentry_ClientService',
            'sentry.exception_listener' => 'getSentry_ExceptionListenerService',
            'service_locator.13a95416315a5a31219d365fb7f68978' => 'getServiceLocator_13a95416315a5a31219d365fb7f68978Service',
            'service_locator.145a70212de7d7a82805965fdcf0bf7c' => 'getServiceLocator_145a70212de7d7a82805965fdcf0bf7cService',
            'service_locator.182f5c5b079727c046caf1a16a7b23a8' => 'getServiceLocator_182f5c5b079727c046caf1a16a7b23a8Service',
            'service_locator.278dce3355138ab2f098b4f258fc9a45' => 'getServiceLocator_278dce3355138ab2f098b4f258fc9a45Service',
            'service_locator.283c250a0d407c79a3fd038166c4dbca' => 'getServiceLocator_283c250a0d407c79a3fd038166c4dbcaService',
            'service_locator.415ed85eb7b36e4772742e4527c8efb9' => 'getServiceLocator_415ed85eb7b36e4772742e4527c8efb9Service',
            'service_locator.4932311ed9e94ef5c70a11a1f02dd887' => 'getServiceLocator_4932311ed9e94ef5c70a11a1f02dd887Service',
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => 'getServiceLocator_E64d23c3bf770e2cf44b71643280668dService',
            'service_locator.f07affeece1c57b9b4e63280ca6dd701' => 'getServiceLocator_F07affeece1c57b9b4e63280ca6dd701Service',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'tetranz_select2entity.select2entity_type' => 'getTetranzSelect2entity_Select2entityTypeService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'vich_uploader.directory_namer_subdir' => 'getVichUploader_DirectoryNamerSubdirService',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService',
            'vich_uploader.metadata_reader' => 'getVichUploader_MetadataReaderService',
            'vich_uploader.namer_hash' => 'getVichUploader_NamerHashService',
            'vich_uploader.namer_origname' => 'getVichUploader_NamerOrignameService',
            'vich_uploader.namer_property' => 'getVichUploader_NamerPropertyService',
            'vich_uploader.namer_uniqid' => 'getVichUploader_NamerUniqidService',
            'vich_uploader.property_mapping_factory' => 'getVichUploader_PropertyMappingFactoryService',
            'vich_uploader.storage' => 'getVichUploader_StorageService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'white_october_pagerfanta.view_factory' => 'getWhiteOctoberPagerfanta_ViewFactoryService',
        );
        $this->privates = array(
            '1_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf' => true,
            '2_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf' => true,
            'Riverway\\Cms\\CoreBundle\\EventListener\\ExceptionListener' => true,
            'Riverway\\Cms\\CoreBundle\\Form\\ArticleType' => true,
            'Riverway\\Cms\\CoreBundle\\Form\\CategoryType' => true,
            'Riverway\\Cms\\CoreBundle\\Form\\EditorWidgetType' => true,
            'Riverway\\Cms\\CoreBundle\\Form\\Extension\\ImageTypeExtension' => true,
            'Riverway\\Cms\\CoreBundle\\Form\\Extension\\ImperaviType' => true,
            'Riverway\\Cms\\CoreBundle\\Form\\SidebarType' => true,
            'Riverway\\Cms\\CoreBundle\\Form\\WidgetSequenceType' => true,
            'Riverway\\Cms\\CoreBundle\\Form\\WidgetType' => true,
            'Riverway\\Cms\\CoreBundle\\Service\\ArticleRenderer' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Article' => true,
            'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Sidebar' => true,
            'autowired.Riverway\\Cms\\CoreBundle\\Entity\\Tag' => true,
            'cache.annotations' => true,
            'cache.annotations.recorder_inner' => true,
            'cache.app.recorder_inner' => true,
            'cache.serializer.recorder_inner' => true,
            'cache.system.recorder_inner' => true,
            'cache.validator' => true,
            'cache.validator.recorder_inner' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'fos_rest.allowed_methods_loader' => true,
            'fos_rest.request.param_fetcher.reader' => true,
            'fos_rest.serializer.jms_handler_registry' => true,
            'jms_serializer.unserialize_object_constructor' => true,
            'resolve_controller_name_subscriber' => true,
            'router.request_context' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.dao.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.firewall.map' => true,
            'security.logout_url_generator' => true,
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => true,
            'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' => true,
            'security.role_hierarchy' => true,
            'security.user.provider.concrete.in_memory' => true,
            'security.user_value_resolver' => true,
            'service_locator.13a95416315a5a31219d365fb7f68978' => true,
            'service_locator.145a70212de7d7a82805965fdcf0bf7c' => true,
            'service_locator.182f5c5b079727c046caf1a16a7b23a8' => true,
            'service_locator.278dce3355138ab2f098b4f258fc9a45' => true,
            'service_locator.283c250a0d407c79a3fd038166c4dbca' => true,
            'service_locator.415ed85eb7b36e4772742e4527c8efb9' => true,
            'service_locator.4932311ed9e94ef5c70a11a1f02dd887' => true,
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => true,
            'service_locator.f07affeece1c57b9b4e63280ca6dd701' => true,
            'session.storage.metadata_bag' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
            'vich_uploader.metadata_reader' => true,
            'vich_uploader.property_mapping_factory' => true,
            'web_profiler.csp.handler' => true,
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_rest.router' => 'router',
            'fos_rest.templating' => 'templating',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Admin\ArticleController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Admin\ArticleController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Admin_ArticleControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Admin\ArticleController'] = new \Riverway\Cms\CoreBundle\Controller\Admin\ArticleController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Admin\CategoryController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Admin\CategoryController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Admin_CategoryControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Admin\CategoryController'] = new \Riverway\Cms\CoreBundle\Controller\Admin\CategoryController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Admin\ImageUploadController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Admin\ImageUploadController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Admin_ImageUploadControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Admin\ImageUploadController'] = new \Riverway\Cms\CoreBundle\Controller\Admin\ImageUploadController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Admin\MenuController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Admin\MenuController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Admin_MenuControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Admin\MenuController'] = new \Riverway\Cms\CoreBundle\Controller\Admin\MenuController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Admin\SidebarController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Admin\SidebarController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Admin_SidebarControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Admin\SidebarController'] = new \Riverway\Cms\CoreBundle\Controller\Admin\SidebarController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Admin\TagController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Admin\TagController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Admin_TagControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Admin\TagController'] = new \Riverway\Cms\CoreBundle\Controller\Admin\TagController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Admin\WidgetController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Admin\WidgetController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Admin_WidgetControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Admin\WidgetController'] = new \Riverway\Cms\CoreBundle\Controller\Admin\WidgetController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Front\ContentController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Front\ContentController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Front_ContentControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Front\ContentController'] = new \Riverway\Cms\CoreBundle\Controller\Front\ContentController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Controller\Front\SearchController' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Controller\Front\SearchController
     */
    protected function getRiverway_Cms_CoreBundle_Controller_Front_SearchControllerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Controller\Front\SearchController'] = new \Riverway\Cms\CoreBundle\Controller\Front\SearchController();
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Service\FileManager' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Service\FileManager
     */
    protected function getRiverway_Cms_CoreBundle_Service_FileManagerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Service\FileManager'] = new \Riverway\Cms\CoreBundle\Service\FileManager(($this->targetDirs[4].'/web/uploads/images/redactor'), '/uploads/images/redactor', ${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->get('liip_imagine.cache.manager')) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->get('filesystem')) && false ?: '_'});
    }

    /**
     * Gets the public 'Riverway\Cms\CoreBundle\Widget\WidgetRegistry' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Widget\WidgetRegistry
     */
    protected function getRiverway_Cms_CoreBundle_Widget_WidgetRegistryService()
    {
        $a = new \Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'});
        $a->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'});
        $a->setTwigEngine(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});

        $this->services['Riverway\Cms\CoreBundle\Widget\WidgetRegistry'] = $instance = new \Riverway\Cms\CoreBundle\Widget\WidgetRegistry();

        $instance->addWidget($a);

        return $instance;
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy(($this->targetDirs[4].'/web/build/manifest.json')), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->get('assets.context')) && false ?: '_'}), array());
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.app.recorder_inner']) ? $this->services['cache.app.recorder_inner'] : $this->getCache_App_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache.default_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_DefaultClearerService()
    {
        return $this->services['cache.default_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.system.recorder_inner']) ? $this->services['cache.system.recorder_inner'] : $this->getCache_System_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => ${($_ = isset($this->services['cache.default_clearer']) ? $this->services['cache.default_clearer'] : $this->get('cache.default_clearer')) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $b = ${($_ = isset($this->services['templating.filename_parser']) ? $this->services['templating.filename_parser'] : $this->get('templating.filename_parser')) && false ?: '_'};

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}, (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
            $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
        })), $c, array()), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[3], array())), 7 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}), 8 => ${($_ = isset($this->services['fos_rest.allowed_methods_loader']) ? $this->services['fos_rest.allowed_methods_loader'] : $this->getFosRest_AllowedMethodsLoaderService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['1_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf']) ? $this->services['1_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf'] : $this->get159d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bfService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['2_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf']) ? $this->services['2_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf'] : $this->get259d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bfService()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the public 'console.command.riverway_cms_corebundle_command_fixturesreloadcommand' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Command\FixturesReloadCommand
     */
    protected function getConsole_Command_RiverwayCmsCorebundleCommandFixturesreloadcommandService()
    {
        return $this->services['console.command.riverway_cms_corebundle_command_fixturesreloadcommand'] = new \Riverway\Cms\CoreBundle\Command\FixturesReloadCommand();
    }

    /**
     * Gets the public 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService()
    {
        return $this->services['console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand'] = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, array());
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverruncommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerruncommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverruncommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand(($this->targetDirs[4].'/public'), 'dev');
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstartcommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstartcommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand(($this->targetDirs[4].'/public'), 'dev');
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstatuscommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstatuscommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand();
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstopcommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstopcommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand();
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->get('data_collector.form.extractor')) && false ?: '_'});
    }

    /**
     * Gets the public 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the public 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the public 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the public 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->getArgumentResolver_RequestAttributeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->getArgumentResolver_RequestService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->getArgumentResolver_SessionService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->getSecurity_UserValueResolverService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->getArgumentResolver_ServiceService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->getArgumentResolver_DefaultService()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->getArgumentResolver_VariadicService()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, ${($_ = isset($this->services['var_dumper.cli_dumper']) ? $this->services['var_dumper.cli_dumper'] : $this->get('var_dumper.cli_dumper')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.sliding_pagination']) ? $this->services['knp_paginator.subscriber.sliding_pagination'] : $this->get('knp_paginator.subscriber.sliding_pagination')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['knp_menu.listener.voters']) ? $this->services['knp_menu.listener.voters'] : $this->get('knp_menu.listener.voters')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.body_listener']) ? $this->services['fos_rest.body_listener'] : $this->get('fos_rest.body_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.format_listener']) ? $this->services['fos_rest.format_listener'] : $this->get('fos_rest.format_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 34);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.allowed_methods_listener']) ? $this->services['fos_rest.allowed_methods_listener'] : $this->get('fos_rest.allowed_methods_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['sentry.exception_listener']) ? $this->services['sentry.exception_listener'] : $this->get('sentry.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['sentry.exception_listener']) ? $this->services['sentry.exception_listener'] : $this->get('sentry.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['sentry.exception_listener']) ? $this->services['sentry.exception_listener'] : $this->get('sentry.exception_listener')) && false ?: '_'};
        }, 1 => 'onConsoleCommand'), 0);
        $instance->addListener('console.exception', array(0 => function () {
            return ${($_ = isset($this->services['sentry.exception_listener']) ? $this->services['sentry.exception_listener'] : $this->get('sentry.exception_listener')) && false ?: '_'};
        }, 1 => 'onConsoleException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Riverway\Cms\CoreBundle\EventListener\ExceptionListener']) ? $this->services['Riverway\Cms\CoreBundle\EventListener\ExceptionListener'] : $this->getRiverway_Cms_CoreBundle_EventListener_ExceptionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->get('response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->get('streamed_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->get('validate_request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->get('session_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->get('session.save_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->get('fragment.listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->get('translator_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->get('translator_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->get('security.rememberme.response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->get('twig.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->get('sensio_framework_extra.controller.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->get('sensio_framework_extra.converter.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->get('sensio_framework_extra.security.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.access_denied_listener']) ? $this->services['fos_rest.access_denied_listener'] : $this->get('fos_rest.access_denied_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), 5);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener']) ? $this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] : $this->get('pagerfanta.convert_not_valid_max_per_page_to_not_found_listener')) && false ?: '_'};
        }, 1 => 'onException'), 512);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener']) ? $this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] : $this->get('pagerfanta.convert_not_valid_current_page_to_not_found_listener')) && false ?: '_'};
        }, 1 => 'onException'), 512);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->get('debug.dump_listener')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->get('web_profiler.debug_toolbar')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);
        $instance->addListener('knp_pager.before', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.paginate']) ? $this->services['knp_paginator.subscriber.paginate'] : $this->get('knp_paginator.subscriber.paginate')) && false ?: '_'};
        }, 1 => 'before'), 0);
        $instance->addListener('knp_pager.pagination', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.paginate']) ? $this->services['knp_paginator.subscriber.paginate'] : $this->get('knp_paginator.subscriber.paginate')) && false ?: '_'};
        }, 1 => 'pagination'), 0);
        $instance->addListener('knp_pager.before', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.sortable']) ? $this->services['knp_paginator.subscriber.sortable'] : $this->get('knp_paginator.subscriber.sortable')) && false ?: '_'};
        }, 1 => 'before'), 1);
        $instance->addListener('knp_pager.before', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.filtration']) ? $this->services['knp_paginator.subscriber.filtration'] : $this->get('knp_paginator.subscriber.filtration')) && false ?: '_'};
        }, 1 => 'before'), 1);
        $instance->addListener('knp_pager.pagination', array(0 => function () {
            return ${($_ = isset($this->services['knp_paginator.subscriber.sliding_pagination']) ? $this->services['knp_paginator.subscriber.sliding_pagination'] : $this->get('knp_paginator.subscriber.sliding_pagination')) && false ?: '_'};
        }, 1 => 'pagination'), 1);

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'deprecated.form.registry' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_RegistryService()
    {
        @trigger_error('The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'}, 5 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'}, 6 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'}, 7 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'deprecated.form.registry.csrf' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_Registry_CsrfService()
    {
        @trigger_error('The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry.csrf'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = ${($_ = isset($this->services['vich_uploader.metadata_reader']) ? $this->services['vich_uploader.metadata_reader'] : $this->getVichUploader_MetadataReaderService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->get('vich_uploader.upload_handler')) && false ?: '_'};

        $c = new \Doctrine\DBAL\Logging\LoggerChain();
        $c->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $c->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $d = new \Doctrine\DBAL\Configuration();
        $d->setSQLLogger($c);

        $e = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();

        $f = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('article_image', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('article_image', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('article_image', $e, $a, $b));
        $f->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->get('doctrine.orm.default_listeners.attach_entity_listeners')) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'riverway_cms', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $d, $f, array());
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['doctrine.orm.default_entity_manager'] = DoctrineORMEntityManager_000000002ec14f7e000000003d95a20a0d2b3f7d0e33910f370727d2c4fe63ce::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver(array(($this->targetDirs[4].'/src/CoreBundle/Resources/config/doctrine') => 'Riverway\\Cms\\CoreBundle\\Entity'));
        $a->setGlobalBasename('mapping');

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver($a, 'Riverway\\Cms\\CoreBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}, array(0 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Entity'))), 'Vich\\UploaderBundle\\Entity');

        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('RiverwayCmsCoreBundle' => 'Riverway\\Cms\\CoreBundle\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity'));
        $c->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache')) && false ?: '_'});
        $c->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_query_cache')) && false ?: '_'});
        $c->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_result_cache')) && false ?: '_'});
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(true);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->get('doctrine.orm.default_entity_listener_resolver')) && false ?: '_'});

        $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection')) && false ?: '_'}, $c);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->get('doctrine.orm.default_manager_configurator')) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCacheService()
    {
        return $this->services['doctrine_cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_eee5496dadea11408b9a0fcca16000c7c7d69b79bb930f054d96039eeab0c79d');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_eee5496dadea11408b9a0fcca16000c7c7d69b79bb930f054d96039eeab0c79d');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_eee5496dadea11408b9a0fcca16000c7c7d69b79bb930f054d96039eeab0c79d');

        return $instance;
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/Resources'), array(0 => $this->targetDirs[3]));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->get('form.registry')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Liip\\ImagineBundle\\Form\\Type\\ImageType' => function () {
            return ${($_ = isset($this->services['liip_imagine.form.type.image']) ? $this->services['liip_imagine.form.type.image'] : $this->get('liip_imagine.form.type.image')) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Form\\ArticleType' => function () {
            return ${($_ = isset($this->services['Riverway\Cms\CoreBundle\Form\ArticleType']) ? $this->services['Riverway\Cms\CoreBundle\Form\ArticleType'] : $this->getRiverway_Cms_CoreBundle_Form_ArticleTypeService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Form\\CategoryType' => function () {
            return ${($_ = isset($this->services['Riverway\Cms\CoreBundle\Form\CategoryType']) ? $this->services['Riverway\Cms\CoreBundle\Form\CategoryType'] : $this->getRiverway_Cms_CoreBundle_Form_CategoryTypeService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Form\\EditorWidgetType' => function () {
            return ${($_ = isset($this->services['Riverway\Cms\CoreBundle\Form\EditorWidgetType']) ? $this->services['Riverway\Cms\CoreBundle\Form\EditorWidgetType'] : $this->getRiverway_Cms_CoreBundle_Form_EditorWidgetTypeService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Form\\Extension\\ImperaviType' => function () {
            return ${($_ = isset($this->services['Riverway\Cms\CoreBundle\Form\Extension\ImperaviType']) ? $this->services['Riverway\Cms\CoreBundle\Form\Extension\ImperaviType'] : $this->getRiverway_Cms_CoreBundle_Form_Extension_ImperaviTypeService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Form\\SidebarType' => function () {
            return ${($_ = isset($this->services['Riverway\Cms\CoreBundle\Form\SidebarType']) ? $this->services['Riverway\Cms\CoreBundle\Form\SidebarType'] : $this->getRiverway_Cms_CoreBundle_Form_SidebarTypeService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Form\\WidgetSequenceType' => function () {
            return ${($_ = isset($this->services['Riverway\Cms\CoreBundle\Form\WidgetSequenceType']) ? $this->services['Riverway\Cms\CoreBundle\Form\WidgetSequenceType'] : $this->getRiverway_Cms_CoreBundle_Form_WidgetSequenceTypeService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Form\\WidgetType' => function () {
            return ${($_ = isset($this->services['Riverway\Cms\CoreBundle\Form\WidgetType']) ? $this->services['Riverway\Cms\CoreBundle\Form\WidgetType'] : $this->getRiverway_Cms_CoreBundle_Form_WidgetTypeService()) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->get('form.type.entity')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'};
        }, 'Tetranz\\Select2EntityBundle\\Form\\Type\\Select2EntityType' => function () {
            return ${($_ = isset($this->services['tetranz_select2entity.select2entity_type']) ? $this->services['tetranz_select2entity.select2entity_type'] : $this->get('tetranz_select2entity.select2entity_type')) && false ?: '_'};
        }, 'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => function () {
            return ${($_ = isset($this->services['vich_uploader.form.type.file']) ? $this->services['vich_uploader.form.type.file'] : $this->get('vich_uploader.form.type.file')) && false ?: '_'};
        }, 'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => function () {
            return ${($_ = isset($this->services['vich_uploader.form.type.image']) ? $this->services['vich_uploader.form.type.image'] : $this->get('vich_uploader.form.type.image')) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['Riverway\Cms\CoreBundle\Form\Extension\ImageTypeExtension']) ? $this->services['Riverway\Cms\CoreBundle\Form\Extension\ImageTypeExtension'] : $this->getRiverway_Cms_CoreBundle_Form_Extension_ImageTypeExtensionService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->getForm_TypeExtension_Form_DataCollectorService()) && false ?: '_'};
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->get('form.type_guesser.doctrine')) && false ?: '_'};
        }, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_js_routing.controller' shared service.
     *
     * @return \FOS\JsRoutingBundle\Controller\Controller
     */
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller(${($_ = isset($this->services['fos_js_routing.serializer']) ? $this->services['fos_js_routing.serializer'] : $this->get('fos_js_routing.serializer')) && false ?: '_'}, ${($_ = isset($this->services['fos_js_routing.extractor']) ? $this->services['fos_js_routing.extractor'] : $this->get('fos_js_routing.extractor')) && false ?: '_'}, array('enabled' => false), true);
    }

    /**
     * Gets the public 'fos_js_routing.extractor' shared service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor
     */
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle', 'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'GuzzleBundle' => 'EightPoints\\Bundle\\GuzzleBundle\\GuzzleBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle', 'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle', 'TetranzSelect2EntityBundle' => 'Tetranz\\Select2EntityBundle\\TetranzSelect2EntityBundle', 'RiverwayCmsCoreBundle' => 'Riverway\\Cms\\CoreBundle\\RiverwayCmsCoreBundle', 'RiverwayGridBundle' => 'Riverway\\Grid\\RiverwayGridBundle', 'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SentryBundle' => 'Sentry\\SentryBundle\\SentryBundle', 'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle'));
    }

    /**
     * Gets the public 'fos_js_routing.serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /**
     * Gets the public 'fos_rest.access_denied_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\AccessDeniedListener
     */
    protected function getFosRest_AccessDeniedListenerService()
    {
        return $this->services['fos_rest.access_denied_listener'] = new \FOS\RestBundle\EventListener\AccessDeniedListener(array('json' => true), NULL);
    }

    /**
     * Gets the public 'fos_rest.allowed_methods_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\AllowedMethodsListener
     */
    protected function getFosRest_AllowedMethodsListenerService()
    {
        return $this->services['fos_rest.allowed_methods_listener'] = new \FOS\RestBundle\EventListener\AllowedMethodsListener(${($_ = isset($this->services['fos_rest.allowed_methods_loader']) ? $this->services['fos_rest.allowed_methods_loader'] : $this->getFosRest_AllowedMethodsLoaderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(${($_ = isset($this->services['fos_rest.decoder_provider']) ? $this->services['fos_rest.decoder_provider'] : $this->get('fos_rest.decoder_provider')) && false ?: '_'}, false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.decoder.json' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder.jsontoform' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder.xml' shared service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder_provider' shared service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->services['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider($this, array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /**
     * Gets the public 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener(${($_ = isset($this->services['fos_rest.format_negotiator']) ? $this->services['fos_rest.format_negotiator'] : $this->get('fos_rest.format_negotiator')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_rest.format_negotiator' shared service.
     *
     * @return \FOS\RestBundle\Negotiation\FormatNegotiator
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->services['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Negotiation\FormatNegotiator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/_profiler|_wdt/', NULL, NULL, NULL, array()), array('methods' => NULL, 'priorities' => array(0 => 'html', 1 => 'json'), 'fallback_format' => 'html', 'attributes' => array(), 'prefer_extension' => '2.0'));
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL, NULL, array()), array('priorities' => array(0 => 'html', 1 => 'json', 2 => 'xml', 3 => 'css'), 'fallback_format' => 'html', 'prefer_extension' => false, 'methods' => NULL, 'attributes' => array(), 'stop' => false));

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.inflector' shared service.
     *
     * @return \FOS\RestBundle\Inflector\DoctrineInflector
     */
    protected function getFosRest_InflectorService()
    {
        return $this->services['fos_rest.inflector'] = new \FOS\RestBundle\Inflector\DoctrineInflector();
    }

    /**
     * Gets the public 'fos_rest.normalizer.camel_keys' shared service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the public 'fos_rest.normalizer.camel_keys_with_leading_underscore' shared service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the public 'fos_rest.request.param_fetcher' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->getFosRest_Request_ParamFetcher_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_rest.serializer' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSSerializerAdapter
     */
    public function getFosRest_SerializerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fos_rest.serializer'] = FOSRestBundleSerializerJMSSerializerAdapter_000000002ec1591b000000003d95a20a0d2b3f7d0e33910f370727d2c4fe63ce::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFosRest_SerializerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \FOS\RestBundle\Serializer\JMSSerializerAdapter(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->get('jms_serializer')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_rest.view_handler' shared service.
     *
     * @return \FOS\RestBundle\View\ViewHandler
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.serializer']) ? $this->services['fos_rest.serializer'] : $this->get('fos_rest.serializer')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setSerializeNullStrategy(true);

        return $instance;
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(${($_ = isset($this->services['service_locator.e64d23c3bf770e2cf44b71643280668d']) ? $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] : $this->getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the public 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.ssi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'guzzle_bundle.formatter' shared service.
     *
     * @return \GuzzleHttp\MessageFormatter
     */
    protected function getGuzzleBundle_FormatterService()
    {
        return $this->services['guzzle_bundle.formatter'] = new \GuzzleHttp\MessageFormatter();
    }

    /**
     * Gets the public 'guzzle_bundle.logger' shared service.
     *
     * @return \EightPoints\Bundle\GuzzleBundle\Log\Logger
     */
    protected function getGuzzleBundle_LoggerService()
    {
        return $this->services['guzzle_bundle.logger'] = new \EightPoints\Bundle\GuzzleBundle\Log\Logger();
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->get('debug.controller_resolver')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'), 1 => NULL, 2 => NULL), 2 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL))));

        $this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer($a, ${($_ = isset($this->services['jms_serializer.handler_registry']) ? $this->services['jms_serializer.handler_registry'] : $this->get('jms_serializer.handler_registry')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->getJmsSerializer_UnserializeObjectConstructorService()) && false ?: '_'}, new \PhpCollection\Map(array('json' => ${($_ = isset($this->services['jms_serializer.json_serialization_visitor']) ? $this->services['jms_serializer.json_serialization_visitor'] : $this->get('jms_serializer.json_serialization_visitor')) && false ?: '_'}, 'xml' => ${($_ = isset($this->services['jms_serializer.xml_serialization_visitor']) ? $this->services['jms_serializer.xml_serialization_visitor'] : $this->get('jms_serializer.xml_serialization_visitor')) && false ?: '_'}, 'yml' => ${($_ = isset($this->services['jms_serializer.yaml_serialization_visitor']) ? $this->services['jms_serializer.yaml_serialization_visitor'] : $this->get('jms_serializer.yaml_serialization_visitor')) && false ?: '_'})), new \PhpCollection\Map(array('json' => ${($_ = isset($this->services['jms_serializer.json_deserialization_visitor']) ? $this->services['jms_serializer.json_deserialization_visitor'] : $this->get('jms_serializer.json_deserialization_visitor')) && false ?: '_'}, 'xml' => ${($_ = isset($this->services['jms_serializer.xml_deserialization_visitor']) ? $this->services['jms_serializer.xml_deserialization_visitor'] : $this->get('jms_serializer.xml_deserialization_visitor')) && false ?: '_'})), $b, NULL, ${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->get('jms_serializer.expression_evaluator')) && false ?: '_'});

        $instance->setSerializationContextFactory(${($_ = isset($this->services['jms_serializer.serialization_context_factory']) ? $this->services['jms_serializer.serialization_context_factory'] : $this->get('jms_serializer.serialization_context_factory')) && false ?: '_'});
        $instance->setDeserializationContextFactory(${($_ = isset($this->services['jms_serializer.deserialization_context_factory']) ? $this->services['jms_serializer.deserialization_context_factory'] : $this->get('jms_serializer.deserialization_context_factory')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.accessor_strategy' shared service.
     *
     * @return \JMS\Serializer\Accessor\ExpressionAccessorStrategy
     */
    protected function getJmsSerializer_AccessorStrategyService()
    {
        return $this->services['jms_serializer.accessor_strategy'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy(${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->get('jms_serializer.expression_evaluator')) && false ?: '_'}, new \JMS\Serializer\Accessor\DefaultAccessorStrategy());
    }

    /**
     * Gets the public 'jms_serializer.array_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(false);
    }

    /**
     * Gets the public 'jms_serializer.constraint_violation_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the public 'jms_serializer.datetime_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\DateHandler
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sP', 'Europe/London', true);
    }

    /**
     * Gets the public 'jms_serializer.deserialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.doctrine_proxy_subscriber' shared service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false);
    }

    /**
     * Gets the public 'jms_serializer.expression_evaluator' shared service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator
     */
    protected function getJmsSerializer_ExpressionEvaluatorService()
    {
        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $this->services['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, array('container' => $this));
    }

    /**
     * Gets the public 'jms_serializer.form_error_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, 'validators');
    }

    /**
     * Gets the public 'jms_serializer.handler_registry' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSHandlerRegistry
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \FOS\RestBundle\Serializer\JMSHandlerRegistry(${($_ = isset($this->services['fos_rest.serializer.jms_handler_registry']) ? $this->services['fos_rest.serializer.jms_handler_registry'] : $this->getFosRest_Serializer_JmsHandlerRegistryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.json_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.json_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->get('jms_serializer.accessor_strategy')) && false ?: '_'});

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.metadata_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array());

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}))), ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the public 'jms_serializer.object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->getJmsSerializer_UnserializeObjectConstructorService()) && false ?: '_'}, 'null');
    }

    /**
     * Gets the public 'jms_serializer.php_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the public 'jms_serializer.serialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.stopwatch_subscriber' shared service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.templating.helper.serializer' shared service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->get('jms_serializer')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.twig_extension.serializer_runtime_helper' shared service.
     *
     * @return \JMS\Serializer\Twig\SerializerRuntimeHelper
     */
    protected function getJmsSerializer_TwigExtension_SerializerRuntimeHelperService()
    {
        return $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] = new \JMS\Serializer\Twig\SerializerRuntimeHelper(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->get('jms_serializer')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.xml_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'});

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.xml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        $this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->get('jms_serializer.accessor_strategy')) && false ?: '_'});

        $instance->setFormatOutput(true);

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.yaml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->get('jms_serializer.accessor_strategy')) && false ?: '_'});
    }

    /**
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     *
     * @deprecated The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        @trigger_error('The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel'));
    }

    /**
     * Gets the public 'knp_menu.factory' shared service.
     *
     * @return \Knp\Menu\MenuFactory
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 0);

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.listener.voters' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter(${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->get('knp_menu.voter.router')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter(${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->get('knp_menu.voter.router')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.menu_provider' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderServiceProvider($this, array()), 2 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, $this, ${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->get('knp_menu.factory')) && false ?: '_'})));
    }

    /**
     * Gets the public 'knp_menu.renderer.list' shared service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'}, array(), 'UTF-8');
    }

    /**
     * Gets the public 'knp_menu.renderer.twig' shared service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, '@RiverwayCmsCore/Menu/knp_menu.html.twig', ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'}, array());
    }

    /**
     * Gets the public 'knp_menu.renderer_provider' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the public 'knp_menu.voter.router' shared service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getKnpPaginatorService()
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

        return $instance;
    }

    /**
     * Gets the public 'knp_paginator.helper.processor' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Helper\Processor
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'knp_paginator.subscriber.filtration' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.subscriber.paginate' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:sliding.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => 'KnpPaginatorBundle:Pagination:filtration.html.twig', 'defaultPageRange' => 5));
    }

    /**
     * Gets the public 'knp_paginator.subscriber.sortable' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.twig.extension.pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(${($_ = isset($this->services['knp_paginator.helper.processor']) ? $this->services['knp_paginator.helper.processor'] : $this->get('knp_paginator.helper.processor')) && false ?: '_'});
    }

    /**
     * Gets the public 'liip_imagine' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    protected function getLiipImagineService()
    {
        $this->services['liip_imagine'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.binary.loader.default' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader(${($_ = isset($this->services['liip_imagine.mime_type_guesser']) ? $this->services['liip_imagine.mime_type_guesser'] : $this->get('liip_imagine.mime_type_guesser')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.extension_guesser']) ? $this->services['liip_imagine.extension_guesser'] : $this->get('liip_imagine.extension_guesser')) && false ?: '_'}, new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator(array(0 => ($this->targetDirs[3].'/../web'))), '');
    }

    /**
     * Gets the public 'liip_imagine.binary.loader.prototype.filesystem' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader
     */
    protected function getLiipImagine_Binary_Loader_Prototype_FilesystemService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.filesystem'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader(${($_ = isset($this->services['liip_imagine.mime_type_guesser']) ? $this->services['liip_imagine.mime_type_guesser'] : $this->get('liip_imagine.mime_type_guesser')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.extension_guesser']) ? $this->services['liip_imagine.extension_guesser'] : $this->get('liip_imagine.extension_guesser')) && false ?: '_'}, '', '');
    }

    /**
     * Gets the public 'liip_imagine.binary.loader.prototype.stream' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\StreamLoader
     */
    protected function getLiipImagine_Binary_Loader_Prototype_StreamService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.stream'] = new \Liip\ImagineBundle\Binary\Loader\StreamLoader('', '');
    }

    /**
     * Gets the public 'liip_imagine.binary.mime_type_guesser' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser(${($_ = isset($this->services['liip_imagine.mime_type_guesser']) ? $this->services['liip_imagine.mime_type_guesser'] : $this->get('liip_imagine.mime_type_guesser')) && false ?: '_'});
    }

    /**
     * Gets the public 'liip_imagine.cache.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->get('liip_imagine.filter.configuration')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.signer']) ? $this->services['liip_imagine.cache.signer'] : $this->get('liip_imagine.cache.signer')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, 'default');

        $instance->addResolver('default', ${($_ = isset($this->services['liip_imagine.cache.resolver.default']) ? $this->services['liip_imagine.cache.resolver.default'] : $this->get('liip_imagine.cache.resolver.default')) && false ?: '_'});
        $instance->addResolver('no_cache', ${($_ = isset($this->services['liip_imagine.cache.resolver.no_cache_web_path']) ? $this->services['liip_imagine.cache.resolver.no_cache_web_path'] : $this->get('liip_imagine.cache.resolver.no_cache_web_path')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->get('filesystem')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ($this->targetDirs[3].'/../web'), 'media/cache');
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer('32716f89d6b934582a4513803142c35523458822');
    }

    /**
     * Gets the public 'liip_imagine.controller' shared service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController
     */
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController(${($_ = isset($this->services['liip_imagine.data.manager']) ? $this->services['liip_imagine.data.manager'] : $this->get('liip_imagine.data.manager')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.filter.manager']) ? $this->services['liip_imagine.filter.manager'] : $this->get('liip_imagine.filter.manager')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->get('liip_imagine.cache.manager')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.signer']) ? $this->services['liip_imagine.cache.signer'] : $this->get('liip_imagine.cache.signer')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, 301);
    }

    /**
     * Gets the public 'liip_imagine.data.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager(${($_ = isset($this->services['liip_imagine.binary.mime_type_guesser']) ? $this->services['liip_imagine.binary.mime_type_guesser'] : $this->get('liip_imagine.binary.mime_type_guesser')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.extension_guesser']) ? $this->services['liip_imagine.extension_guesser'] : $this->get('liip_imagine.extension_guesser')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->get('liip_imagine.filter.configuration')) && false ?: '_'}, 'default', NULL);

        $instance->addLoader('default', ${($_ = isset($this->services['liip_imagine.binary.loader.default']) ? $this->services['liip_imagine.binary.loader.default'] : $this->get('liip_imagine.binary.loader.default')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.extension_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface
     */
    protected function getLiipImagine_ExtensionGuesserService()
    {
        return $this->services['liip_imagine.extension_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::getInstance();
    }

    /**
     * Gets the public 'liip_imagine.filter.configuration' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('cache' => array('quality' => 100, 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'filters' => array(), 'post_processors' => array()), 'thumb' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 120, 1 => 90), 'mode' => 'outbound'), 'background' => array('size' => array(0 => 124, 1 => 94), 'position' => 'center', 'color' => '#000000')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'normal' => array('quality' => 95, 'filters' => array('thumbnail' => array('size' => array(0 => 500, 1 => 400), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array())));
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.auto_rotate' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_AutoRotateService()
    {
        return $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.background' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'});
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.crop' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.downscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.flip' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_FlipService()
    {
        return $this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.grayscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_GrayscaleService()
    {
        return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.interlace' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.paste' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'}, $this->targetDirs[3]);
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.relative_resize' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.resample' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ResampleService()
    {
        return $this->services['liip_imagine.filter.loader.resample'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'});
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.resize' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.rotate' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.scale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ScaleService()
    {
        return $this->services['liip_imagine.filter.loader.scale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.strip' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.thumbnail' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.upscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.watermark' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'}, $this->targetDirs[3]);
    }

    /**
     * Gets the public 'liip_imagine.filter.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->get('liip_imagine.filter.configuration')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.binary.mime_type_guesser']) ? $this->services['liip_imagine.binary.mime_type_guesser'] : $this->get('liip_imagine.binary.mime_type_guesser')) && false ?: '_'});

        $instance->addLoader('relative_resize', ${($_ = isset($this->services['liip_imagine.filter.loader.relative_resize']) ? $this->services['liip_imagine.filter.loader.relative_resize'] : $this->get('liip_imagine.filter.loader.relative_resize')) && false ?: '_'});
        $instance->addLoader('resize', ${($_ = isset($this->services['liip_imagine.filter.loader.resize']) ? $this->services['liip_imagine.filter.loader.resize'] : $this->get('liip_imagine.filter.loader.resize')) && false ?: '_'});
        $instance->addLoader('thumbnail', ${($_ = isset($this->services['liip_imagine.filter.loader.thumbnail']) ? $this->services['liip_imagine.filter.loader.thumbnail'] : $this->get('liip_imagine.filter.loader.thumbnail')) && false ?: '_'});
        $instance->addLoader('crop', ${($_ = isset($this->services['liip_imagine.filter.loader.crop']) ? $this->services['liip_imagine.filter.loader.crop'] : $this->get('liip_imagine.filter.loader.crop')) && false ?: '_'});
        $instance->addLoader('grayscale', ${($_ = isset($this->services['liip_imagine.filter.loader.grayscale']) ? $this->services['liip_imagine.filter.loader.grayscale'] : $this->get('liip_imagine.filter.loader.grayscale')) && false ?: '_'});
        $instance->addLoader('paste', ${($_ = isset($this->services['liip_imagine.filter.loader.paste']) ? $this->services['liip_imagine.filter.loader.paste'] : $this->get('liip_imagine.filter.loader.paste')) && false ?: '_'});
        $instance->addLoader('watermark', ${($_ = isset($this->services['liip_imagine.filter.loader.watermark']) ? $this->services['liip_imagine.filter.loader.watermark'] : $this->get('liip_imagine.filter.loader.watermark')) && false ?: '_'});
        $instance->addLoader('background', ${($_ = isset($this->services['liip_imagine.filter.loader.background']) ? $this->services['liip_imagine.filter.loader.background'] : $this->get('liip_imagine.filter.loader.background')) && false ?: '_'});
        $instance->addLoader('strip', ${($_ = isset($this->services['liip_imagine.filter.loader.strip']) ? $this->services['liip_imagine.filter.loader.strip'] : $this->get('liip_imagine.filter.loader.strip')) && false ?: '_'});
        $instance->addLoader('scale', ${($_ = isset($this->services['liip_imagine.filter.loader.scale']) ? $this->services['liip_imagine.filter.loader.scale'] : $this->get('liip_imagine.filter.loader.scale')) && false ?: '_'});
        $instance->addLoader('upscale', ${($_ = isset($this->services['liip_imagine.filter.loader.upscale']) ? $this->services['liip_imagine.filter.loader.upscale'] : $this->get('liip_imagine.filter.loader.upscale')) && false ?: '_'});
        $instance->addLoader('downscale', ${($_ = isset($this->services['liip_imagine.filter.loader.downscale']) ? $this->services['liip_imagine.filter.loader.downscale'] : $this->get('liip_imagine.filter.loader.downscale')) && false ?: '_'});
        $instance->addLoader('auto_rotate', ${($_ = isset($this->services['liip_imagine.filter.loader.auto_rotate']) ? $this->services['liip_imagine.filter.loader.auto_rotate'] : $this->get('liip_imagine.filter.loader.auto_rotate')) && false ?: '_'});
        $instance->addLoader('rotate', ${($_ = isset($this->services['liip_imagine.filter.loader.rotate']) ? $this->services['liip_imagine.filter.loader.rotate'] : $this->get('liip_imagine.filter.loader.rotate')) && false ?: '_'});
        $instance->addLoader('flip', ${($_ = isset($this->services['liip_imagine.filter.loader.flip']) ? $this->services['liip_imagine.filter.loader.flip'] : $this->get('liip_imagine.filter.loader.flip')) && false ?: '_'});
        $instance->addLoader('interlace', ${($_ = isset($this->services['liip_imagine.filter.loader.interlace']) ? $this->services['liip_imagine.filter.loader.interlace'] : $this->get('liip_imagine.filter.loader.interlace')) && false ?: '_'});
        $instance->addLoader('resample', ${($_ = isset($this->services['liip_imagine.filter.loader.resample']) ? $this->services['liip_imagine.filter.loader.resample'] : $this->get('liip_imagine.filter.loader.resample')) && false ?: '_'});
        $instance->addPostProcessor('jpegoptim', ${($_ = isset($this->services['liip_imagine.filter.post_processor.jpegoptim']) ? $this->services['liip_imagine.filter.post_processor.jpegoptim'] : $this->get('liip_imagine.filter.post_processor.jpegoptim')) && false ?: '_'});
        $instance->addPostProcessor('optipng', ${($_ = isset($this->services['liip_imagine.filter.post_processor.optipng']) ? $this->services['liip_imagine.filter.post_processor.optipng'] : $this->get('liip_imagine.filter.post_processor.optipng')) && false ?: '_'});
        $instance->addPostProcessor('pngquant', ${($_ = isset($this->services['liip_imagine.filter.post_processor.pngquant']) ? $this->services['liip_imagine.filter.post_processor.pngquant'] : $this->get('liip_imagine.filter.post_processor.pngquant')) && false ?: '_'});
        $instance->addPostProcessor('mozjpeg', ${($_ = isset($this->services['liip_imagine.filter.post_processor.mozjpeg']) ? $this->services['liip_imagine.filter.post_processor.mozjpeg'] : $this->get('liip_imagine.filter.post_processor.mozjpeg')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.filter.post_processor.jpegoptim' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor
     */
    protected function getLiipImagine_Filter_PostProcessor_JpegoptimService()
    {
        return $this->services['liip_imagine.filter.post_processor.jpegoptim'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL);
    }

    /**
     * Gets the public 'liip_imagine.filter.post_processor.mozjpeg' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor
     */
    protected function getLiipImagine_Filter_PostProcessor_MozjpegService()
    {
        return $this->services['liip_imagine.filter.post_processor.mozjpeg'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg');
    }

    /**
     * Gets the public 'liip_imagine.filter.post_processor.optipng' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor
     */
    protected function getLiipImagine_Filter_PostProcessor_OptipngService()
    {
        return $this->services['liip_imagine.filter.post_processor.optipng'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL);
    }

    /**
     * Gets the public 'liip_imagine.filter.post_processor.pngquant' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor
     */
    protected function getLiipImagine_Filter_PostProcessor_PngquantService()
    {
        return $this->services['liip_imagine.filter.post_processor.pngquant'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant');
    }

    /**
     * Gets the public 'liip_imagine.form.type.image' shared service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /**
     * Gets the public 'liip_imagine.mime_type_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface
     */
    protected function getLiipImagine_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.mime_type_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser::getInstance();
    }

    /**
     * Gets the public 'liip_imagine.templating.helper' shared service.
     *
     * @return \Liip\ImagineBundle\Templating\Helper\ImagineHelper
     */
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper(${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->get('liip_imagine.cache.manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.activation_strategy.not_found' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the public 'monolog.handler.fingers_crossed.error_level_activation_strategy' shared service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the public 'monolog.handler.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ServerLogHandler
     */
    protected function getMonolog_Handler_ServerLogService()
    {
        return $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true);
    }

    /**
     * Gets the public 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'pagerfanta.convert_not_valid_current_page_to_not_found_listener' shared service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener
     */
    protected function getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener();
    }

    /**
     * Gets the public 'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' shared service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener
     */
    protected function getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener();
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.serializer.recorder_inner']) ? $this->services['cache.serializer.recorder_inner'] : $this->getCache_Serializer_RecorderInnerService()) && false ?: '_'}));
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, (__DIR__.'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'});
        $instance->add($c);
        $instance->add(${($_ = isset($this->services['data_collector.translation']) ? $this->services['data_collector.translation'] : $this->get('data_collector.translation')) && false ?: '_'});
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->get('data_collector.dump')) && false ?: '_'});
        $instance->add(new \Riverway\Cms\CoreBundle\Service\Profiler\RiverwayCmsCollector(${($_ = isset($this->services['Riverway\Cms\CoreBundle\Service\ArticleRenderer']) ? $this->services['Riverway\Cms\CoreBundle\Service\ArticleRenderer'] : $this->getRiverway_Cms_CoreBundle_Service_ArticleRendererService()) && false ?: '_'}));
        $instance->add(new \EightPoints\Bundle\GuzzleBundle\DataCollector\HttpDataCollector(${($_ = isset($this->services['guzzle_bundle.logger']) ? $this->services['guzzle_bundle.logger'] : $this->get('guzzle_bundle.logger')) && false ?: '_'}));
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'riverway.grid' shared service.
     *
     * @return \Riverway\Grid\Widget\GridWidget
     */
    protected function getRiverway_GridService()
    {
        $this->services['riverway.grid'] = $instance = new \Riverway\Grid\Widget\GridWidget(${($_ = isset($this->services['knp_paginator']) ? $this->services['knp_paginator'] : $this->get('knp_paginator')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});

        $instance->setRequest(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'riverway.twig.extension.grid' shared service.
     *
     * @return \Riverway\Grid\Twig\RiverwayGridExtension
     */
    protected function getRiverway_Twig_Extension_GridService()
    {
        return $this->services['riverway.twig.extension.grid'] = new \Riverway\Grid\Twig\RiverwayGridExtension(${($_ = isset($this->services['riverway.grid']) ? $this->services['riverway.grid'] : $this->get('riverway.grid')) && false ?: '_'});
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.router']) ? $this->services['monolog.logger.router'] : $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'};
        $c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($c);

        $e = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();

        $f = new \Symfony\Component\Config\Loader\LoaderResolver();
        $f->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $f->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));
        $f->addLoader($d);
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($b, $e));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $b, $a, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($c, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->getFosRest_Request_ParamFetcher_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.inflector']) ? $this->services['fos_rest.inflector'] : $this->get('fos_rest.inflector')) && false ?: '_'}, true, array('json' => false, 'xml' => false, 'html' => true)), $c), NULL));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($b, $e, true, array('json' => false, 'xml' => false, 'html' => true), NULL));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($b, $e, true, array('json' => false, 'xml' => false, 'html' => true), NULL));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, $f);
    }

    /**
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}));
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array());
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $c = ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $d = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $e = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $f = ${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'};
        $g = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/register');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/preview/');

        $m = new \Symfony\Component\Security\Http\AccessMap();
        $m->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $m->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $m->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $m->add($k, array(0 => 'ROLE_ADMIN'), NULL);
        $m->add($l, array(0 => 'ROLE_ADMIN'), NULL);

        $n = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $o = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $n, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($n, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $o->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $p = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($n, array());
        $p->setOptions(array('always_use_default_target_path' => true, 'default_target_path' => '_redirect_after_login', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $p->setProviderKey('main');

        $q = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $n, array(), $a);
        $q->setOptions(array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($m, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => ${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->getSecurity_User_Provider_Concrete_InMemoryService()) && false ?: '_'}), 'main', $a, $c, $d), 2 => $o, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $n, 'main', $p, $q, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $c, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '59da0ef05b1767.75049427', $a, $g), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, $m, $g)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $d, $n, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $n, '/login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db', true, false, 'security.user.provider.concrete.in_memory', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'logout', 1 => 'form_login', 2 => 'anonymous')));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_distribution.security_checker' shared service.
     *
     * @return \SensioLabs\Security\SecurityChecker
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the public 'sensio_distribution.security_checker.command' shared service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand(${($_ = isset($this->services['sensio_distribution.security_checker']) ? $this->services['sensio_distribution.security_checker'] : $this->get('sensio_distribution.security_checker')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->get('sensio_framework_extra.converter.manager')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->get('sensio_framework_extra.converter.doctrine.orm')) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->get('sensio_framework_extra.converter.datetime')) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the public 'sentry.client' shared service.
     *
     * @return \Sentry\SentryBundle\SentrySymfonyClient
     */
    protected function getSentry_ClientService()
    {
        $this->services['sentry.client'] = $instance = new \Sentry\SentryBundle\SentrySymfonyClient(NULL, array('logger' => 'php', 'server' => NULL, 'secret_key' => NULL, 'public_key' => NULL, 'project' => 1, 'auto_log_stacks' => false, 'name' => 'mtlc.local', 'site' => NULL, 'tags' => array(), 'release' => NULL, 'environment' => 'dev', 'sample_rate' => 1, 'trace' => true, 'timeout' => 2, 'message_limit' => 1024, 'exclude' => array(), 'http_proxy' => NULL, 'extra' => array(), 'curl_method' => 'sync', 'curl_path' => 'curl', 'curl_ipv4' => true, 'ca_cert' => NULL, 'verify_ssl' => true, 'curl_ssl_version' => NULL, 'trust_x_forwarded_proto' => false, 'mb_detect_order' => NULL, 'error_types' => NULL, 'app_path' => ($this->targetDirs[3].'/..'), 'excluded_app_paths' => array(0 => ($this->targetDirs[3].'/../vendor'), 1 => ($this->targetDirs[3].'/../app/cache'), 2 => ($this->targetDirs[3].'/../var/cache')), 'prefixes' => array(0 => ($this->targetDirs[3].'/..')), 'install_default_breadcrumb_handlers' => true, 'install_shutdown_handler' => true, 'processors' => array(0 => 'Raven_SanitizeDataProcessor'), 'processorOptions' => array()), NULL);

        $instance->install();

        return $instance;
    }

    /**
     * Gets the public 'sentry.exception_listener' shared service.
     *
     * @return \Sentry\SentryBundle\EventListener\ExceptionListener
     */
    protected function getSentry_ExceptionListenerService()
    {
        return $this->services['sentry.exception_listener'] = new \Sentry\SentryBundle\EventListener\ExceptionListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['sentry.client']) ? $this->services['sentry.client'] : $this->get('sentry.client')) && false ?: '_'}, array(0 => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface'), ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->get('session.storage.native')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[4].'/var/sessions/dev'));
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.default.transport']) ? $this->services['swiftmailer.mailer.default.transport'] : $this->get('swiftmailer.mailer.default.transport')) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['swiftmailer.mailer.default.spool']) ? $this->services['swiftmailer.mailer.default.spool'] : $this->get('swiftmailer.mailer.default.spool')) && false ?: '_'});

        $instance->registerPlugin(${($_ = isset($this->services['swiftmailer.mailer.default.plugin.messagelogger']) ? $this->services['swiftmailer.mailer.default.plugin.messagelogger'] : $this->get('swiftmailer.mailer.default.plugin.messagelogger')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('admin@admin.com');
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'tetranz_select2entity.select2entity_type' shared service.
     *
     * @return \Tetranz\Select2EntityBundle\Form\Type\Select2EntityType
     */
    protected function getTetranzSelect2entity_Select2entityTypeService()
    {
        return $this->services['tetranz_select2entity.select2entity_type'] = new \Tetranz\Select2EntityBundle\Form\Type\Select2EntityType(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, array('minimum_input_length' => 2, 'page_limit' => 8, 'allow_clear' => true, 'delay' => 500, 'language' => 'en', 'cache' => false, 'cache_timeout' => 0, 'scroll' => true, 'allow_add' => array('enabled' => false, 'new_tag_text' => ' (NEW)', 'new_tag_prefix' => '__', 'tag_separators' => '[",", " "]'), 'width' => NULL, 'object_manager' => 1));
    }

    /**
     * Gets the public 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the public 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ${($_ = isset($this->services['translation.extractor.php']) ? $this->services['translation.extractor.php'] : $this->get('translation.extractor.php')) && false ?: '_'});
        $instance->addExtractor('twig', ${($_ = isset($this->services['twig.translation.extractor']) ? $this->services['twig.translation.extractor'] : $this->get('twig.translation.extractor')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the public 'translation.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader
     */
    protected function getTranslation_LoaderService()
    {
        $a = ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->get('translation.loader.xliff')) && false ?: '_'};

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->get('translation.loader.php')) && false ?: '_'});
        $instance->addLoader('yml', ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->get('translation.loader.yml')) && false ?: '_'});
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->get('translation.loader.po')) && false ?: '_'});
        $instance->addLoader('mo', ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->get('translation.loader.mo')) && false ?: '_'});
        $instance->addLoader('ts', ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->get('translation.loader.qt')) && false ?: '_'});
        $instance->addLoader('csv', ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->get('translation.loader.csv')) && false ?: '_'});
        $instance->addLoader('res', ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->get('translation.loader.res')) && false ?: '_'});
        $instance->addLoader('dat', ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->get('translation.loader.dat')) && false ?: '_'});
        $instance->addLoader('ini', ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->get('translation.loader.ini')) && false ?: '_'});
        $instance->addLoader('json', ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->get('translation.loader.json')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the public 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the public 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the public 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the public 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the public 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the public 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the public 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the public 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the public 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', ${($_ = isset($this->services['translation.dumper.php']) ? $this->services['translation.dumper.php'] : $this->get('translation.dumper.php')) && false ?: '_'});
        $instance->addDumper('xlf', ${($_ = isset($this->services['translation.dumper.xliff']) ? $this->services['translation.dumper.xliff'] : $this->get('translation.dumper.xliff')) && false ?: '_'});
        $instance->addDumper('po', ${($_ = isset($this->services['translation.dumper.po']) ? $this->services['translation.dumper.po'] : $this->get('translation.dumper.po')) && false ?: '_'});
        $instance->addDumper('mo', ${($_ = isset($this->services['translation.dumper.mo']) ? $this->services['translation.dumper.mo'] : $this->get('translation.dumper.mo')) && false ?: '_'});
        $instance->addDumper('yml', ${($_ = isset($this->services['translation.dumper.yml']) ? $this->services['translation.dumper.yml'] : $this->get('translation.dumper.yml')) && false ?: '_'});
        $instance->addDumper('ts', ${($_ = isset($this->services['translation.dumper.qt']) ? $this->services['translation.dumper.qt'] : $this->get('translation.dumper.qt')) && false ?: '_'});
        $instance->addDumper('csv', ${($_ = isset($this->services['translation.dumper.csv']) ? $this->services['translation.dumper.csv'] : $this->get('translation.dumper.csv')) && false ?: '_'});
        $instance->addDumper('ini', ${($_ = isset($this->services['translation.dumper.ini']) ? $this->services['translation.dumper.ini'] : $this->get('translation.dumper.ini')) && false ?: '_'});
        $instance->addDumper('json', ${($_ = isset($this->services['translation.dumper.json']) ? $this->services['translation.dumper.json'] : $this->get('translation.dumper.json')) && false ?: '_'});
        $instance->addDumper('res', ${($_ = isset($this->services['translation.dumper.res']) ? $this->services['translation.dumper.res'] : $this->get('translation.dumper.res')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->get('monolog.logger.translation')) && false ?: '_'}));
    }

    /**
     * Gets the public 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->get('translation.loader.csv')) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->get('translation.loader.dat')) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->get('translation.loader.ini')) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->get('translation.loader.json')) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->get('translation.loader.mo')) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->get('translation.loader.php')) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->get('translation.loader.po')) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->get('translation.loader.qt')) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->get('translation.loader.res')) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->get('translation.loader.xliff')) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->get('translation.loader.yml')) && false ?: '_'};
        })), new \Symfony\Component\Translation\MessageSelector(), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('mn' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'az' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')), 'cs' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.cs.yml'), 4 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff')), 'uk' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.uk.yml'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff')), 'sr_Latn' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff')), 'bg' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')), 'th' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff')), 'ca' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff')), 'sk' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff')), 'ro' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ro.xliff'), 4 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff')), 'pt_BR' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')), 'id' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.id.xliff')), 'hu' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.hu.yml')), 'fi' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'da' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff')), 'gl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'es' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.es.yml'), 4 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.es.xliff'), 5 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff')), 'it' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.it.yml'), 4 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.it.xliff'), 5 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff')), 'sl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.sl.yml'), 4 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff')), 'de' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.de.yml'), 4 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.de.xliff'), 5 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff')), 'et' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'pt' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pt.yml'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff')), 'eu' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'hr' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff')), 'he' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff')), 'en' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.en.yml'), 4 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.en.xliff'), 5 => ($this->targetDirs[4].'/src/CoreBundle/Resources/translations/messages.en.yml'), 6 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 7 => ($this->targetDirs[3].'/Resources/translations/messages.en.yml')), 'ja' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf')), 'el' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')), 'sv' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf')), 'pl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pl.yml'), 4 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.pl.xliff'), 5 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff')), 'fa' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff')), 'hy' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'fr' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fr.yml'), 4 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.fr.xliff'), 5 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff')), 'zh_TW' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')), 'sq' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'ru' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ru.yml'), 4 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ru.xliff'), 5 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff')), 'lt' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.lt.xliff')), 'tr' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.tr.yml'), 3 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff')), 'ar' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ar.yml'), 4 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff')), 'lb' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')), 'cy' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'af' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'lv' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')), 'nl' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.nl.xliff'), 4 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff')), 'nn' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'vi' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')), 'no' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'ky' => array(0 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ky.xliff')), 'sw' => array(0 => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.sw.xliff')), 'oc' => array(0 => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.oc.xliff')))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the public 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'};
        $d = ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->get('knp_menu.matcher')) && false ?: '_'};

        $e = new \Knp\Menu\Util\MenuManipulator();

        $f = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $f->setDisplayOptions(array('fileLinkFormat' => $b));

        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $g->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('dev');
        $h->setDebug(true);
        if ($this->has('security.token_storage')) {
            $h->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $h->setRequestStack($c);
        }

        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->get('twig.loader')) && false ?: '_'}, array('debug' => true, 'strict_variables' => true, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'bootstrap_3_horizontal_layout.html.twig', 2 => 'TetranzSelect2EntityBundle:Form:fields.html.twig', 3 => 'RiverwayCmsCoreBundle:Form:fields.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Twig_Extensions_Extension_Text());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, $this->targetDirs[3], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(${($_ = isset($this->services['vich_uploader.templating.helper.uploader_helper']) ? $this->services['vich_uploader.templating.helper.uploader_helper'] : $this->get('vich_uploader.templating.helper.uploader_helper')) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['knp_paginator.twig.extension.pagination']) ? $this->services['knp_paginator.twig.extension.pagination'] : $this->get('knp_paginator.twig.extension.pagination')) && false ?: '_'});
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(${($_ = isset($this->services['knp_menu.renderer_provider']) ? $this->services['knp_menu.renderer_provider'] : $this->get('knp_menu.renderer_provider')) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->get('knp_menu.menu_provider')) && false ?: '_'}, $e, $d), $d, $e));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension(${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->get('liip_imagine.cache.manager')) && false ?: '_'}));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(${($_ = isset($this->services['riverway.twig.extension.grid']) ? $this->services['riverway.twig.extension.grid'] : $this->get('riverway.twig.extension.grid')) && false ?: '_'});
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, $f));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($g));
        $instance->addGlobal('app', $h);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => function () {
            return ${($_ = isset($this->services['jms_serializer.twig_extension.serializer_runtime_helper']) ? $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] : $this->get('jms_serializer.twig_extension.serializer_runtime_helper')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->get('twig.runtime.httpkernel')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->get('twig.form.renderer')) && false ?: '_'};
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => '@VichUploader/Form/fields.html.twig', 1 => 'form_div_layout.html.twig', 2 => 'bootstrap_3_horizontal_layout.html.twig', 3 => 'TetranzSelect2EntityBundle:Form:fields.html.twig', 4 => 'RiverwayCmsCoreBundle:Form:fields.html.twig', 5 => 'LiipImagineBundle:Form:form_div_layout.html.twig'), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this->targetDirs[4]);

        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[4].'/vendor/vich/uploader-bundle/Resources/views'), 'VichUploader');
        $instance->addPath(($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle/Resources/views'), 'KnpPaginator');
        $instance->addPath(($this->targetDirs[4].'/vendor/knplabs/knp-menu-bundle/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[4].'/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/views'), 'Guzzle');
        $instance->addPath(($this->targetDirs[4].'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
        $instance->addPath(($this->targetDirs[4].'/vendor/tetranz/select2entity-bundle/Tetranz/Select2EntityBundle/Resources/views'), 'TetranzSelect2Entity');
        $instance->addPath(($this->targetDirs[4].'/src/CoreBundle/Resources/views'), 'RiverwayCmsCore');
        $instance->addPath(($this->targetDirs[4].'/vendor/riverway/grid-bundle/Resources/views'), 'RiverwayGrid');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/Resources/views'));
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[4].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('32716f89d6b934582a4513803142c35523458822');
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}->getValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->get('validator.email')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->get('doctrine.orm.validator_initializer')) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the public 'var_dumper.cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the public 'vich_uploader.directory_namer_subdir' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SubdirDirectoryNamer
     */
    protected function getVichUploader_DirectoryNamerSubdirService()
    {
        return $this->services['vich_uploader.directory_namer_subdir'] = new \Vich\UploaderBundle\Naming\SubdirDirectoryNamer();
    }

    /**
     * Gets the public 'vich_uploader.download_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\DownloadHandler
     */
    protected function getVichUploader_DownloadHandlerService()
    {
        return $this->services['vich_uploader.download_handler'] = new \Vich\UploaderBundle\Handler\DownloadHandler(${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.form.type.file' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichFileType
     */
    protected function getVichUploader_Form_Type_FileService()
    {
        return $this->services['vich_uploader.form.type.file'] = new \Vich\UploaderBundle\Form\Type\VichFileType(${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->get('vich_uploader.upload_handler')) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.form.type.image' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichImageType
     */
    protected function getVichUploader_Form_Type_ImageService()
    {
        return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->get('vich_uploader.upload_handler')) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->get('liip_imagine.cache.manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.namer_hash' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\HashNamer
     */
    protected function getVichUploader_NamerHashService()
    {
        return $this->services['vich_uploader.namer_hash'] = new \Vich\UploaderBundle\Naming\HashNamer();
    }

    /**
     * Gets the public 'vich_uploader.namer_origname' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\OrignameNamer
     */
    protected function getVichUploader_NamerOrignameService()
    {
        return $this->services['vich_uploader.namer_origname'] = new \Vich\UploaderBundle\Naming\OrignameNamer();
    }

    /**
     * Gets the public 'vich_uploader.namer_property' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyNamer
     */
    protected function getVichUploader_NamerPropertyService()
    {
        return $this->services['vich_uploader.namer_property'] = new \Vich\UploaderBundle\Naming\PropertyNamer();
    }

    /**
     * Gets the public 'vich_uploader.namer_uniqid' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getVichUploader_NamerUniqidService()
    {
        return $this->services['vich_uploader.namer_uniqid'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'vich_uploader.storage' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    protected function getVichUploader_StorageService()
    {
        return $this->services['vich_uploader.storage'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.templating.helper.uploader_helper' shared service.
     *
     * @return \Vich\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'});
    }

    /**
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    protected function getVichUploader_UploadHandlerService()
    {
        $a = ${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->get('vich_uploader.storage')) && false ?: '_'};

        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'}, $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.cache' => array(0 => 'cache', 1 => '@WebProfiler/Collector/cache.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'Riverway\\Cms\\CoreBundle\\Service\\Profiler\\RiverwayCmsCollector' => NULL, 'guzzle_bundle.data_collector' => array(0 => 'guzzle', 1 => 'GuzzleBundle::debug'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'}, $this->targetDirs[4]);
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, '^/(app(_[\\w]+)?\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'white_october_pagerfanta.view_factory' shared service.
     *
     * @return \Pagerfanta\View\ViewFactory
     */
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'};

        $b = new \Pagerfanta\View\DefaultView();

        $c = new \Pagerfanta\View\TwitterBootstrapView();

        $d = new \Pagerfanta\View\TwitterBootstrap3View();

        $e = new \Pagerfanta\View\SemanticUiView();

        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());

        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap3' => $d, 'semantic_ui' => $e, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($d, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a), 'semantic_ui_translated' => new \WhiteOctober\PagerfantaBundle\View\SemanticUiTranslatedView($e, $a)));

        return $instance;
    }

    /**
     * Gets the private '1_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function get159d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bfService()
    {
        return $this->services['1_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private '2_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function get259d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bfService()
    {
        return $this->services['2_59d6cdf35feb8228a9092586967f3777cd94131c8ba894b078dbf187a99a41bf'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\EventListener\ExceptionListener' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\EventListener\ExceptionListener
     */
    protected function getRiverway_Cms_CoreBundle_EventListener_ExceptionListenerService()
    {
        return $this->services['Riverway\Cms\CoreBundle\EventListener\ExceptionListener'] = new \Riverway\Cms\CoreBundle\EventListener\ExceptionListener(${($_ = isset($this->services['Riverway\Cms\CoreBundle\Service\ArticleRenderer']) ? $this->services['Riverway\Cms\CoreBundle\Service\ArticleRenderer'] : $this->getRiverway_Cms_CoreBundle_Service_ArticleRendererService()) && false ?: '_'});
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Form\ArticleType' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Form\ArticleType
     */
    protected function getRiverway_Cms_CoreBundle_Form_ArticleTypeService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Form\ArticleType'] = new \Riverway\Cms\CoreBundle\Form\ArticleType(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'});
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Form\CategoryType' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Form\CategoryType
     */
    protected function getRiverway_Cms_CoreBundle_Form_CategoryTypeService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Form\CategoryType'] = new \Riverway\Cms\CoreBundle\Form\CategoryType();
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Form\EditorWidgetType' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Form\EditorWidgetType
     */
    protected function getRiverway_Cms_CoreBundle_Form_EditorWidgetTypeService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Form\EditorWidgetType'] = new \Riverway\Cms\CoreBundle\Form\EditorWidgetType();
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Form\Extension\ImageTypeExtension' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Form\Extension\ImageTypeExtension
     */
    protected function getRiverway_Cms_CoreBundle_Form_Extension_ImageTypeExtensionService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Form\Extension\ImageTypeExtension'] = new \Riverway\Cms\CoreBundle\Form\Extension\ImageTypeExtension();
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Form\Extension\ImperaviType' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Form\Extension\ImperaviType
     */
    protected function getRiverway_Cms_CoreBundle_Form_Extension_ImperaviTypeService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Form\Extension\ImperaviType'] = new \Riverway\Cms\CoreBundle\Form\Extension\ImperaviType(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'});
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Form\SidebarType' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Form\SidebarType
     */
    protected function getRiverway_Cms_CoreBundle_Form_SidebarTypeService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Form\SidebarType'] = new \Riverway\Cms\CoreBundle\Form\SidebarType();
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Form\WidgetSequenceType' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Form\WidgetSequenceType
     */
    protected function getRiverway_Cms_CoreBundle_Form_WidgetSequenceTypeService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Form\WidgetSequenceType'] = new \Riverway\Cms\CoreBundle\Form\WidgetSequenceType();
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Form\WidgetType' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Form\WidgetType
     */
    protected function getRiverway_Cms_CoreBundle_Form_WidgetTypeService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Form\WidgetType'] = new \Riverway\Cms\CoreBundle\Form\WidgetType(${($_ = isset($this->services['Riverway\Cms\CoreBundle\Widget\WidgetRegistry']) ? $this->services['Riverway\Cms\CoreBundle\Widget\WidgetRegistry'] : $this->get('Riverway\Cms\CoreBundle\Widget\WidgetRegistry')) && false ?: '_'});
    }

    /**
     * Gets the private 'Riverway\Cms\CoreBundle\Service\ArticleRenderer' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Service\ArticleRenderer
     */
    protected function getRiverway_Cms_CoreBundle_Service_ArticleRendererService()
    {
        return $this->services['Riverway\Cms\CoreBundle\Service\ArticleRenderer'] = new \Riverway\Cms\CoreBundle\Service\ArticleRenderer(${($_ = isset($this->services['fos_rest.view_handler']) ? $this->services['fos_rest.view_handler'] : $this->get('fos_rest.view_handler')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}->getRepository("RiverwayCmsCoreBundle:Article"));
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController:actionImageDelete' => function () {
            return ${($_ = isset($this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c']) ? $this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c'] : $this->getServiceLocator_145a70212de7d7a82805965fdcf0bf7cService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController:deleteAction' => function () {
            return ${($_ = isset($this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c']) ? $this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c'] : $this->getServiceLocator_145a70212de7d7a82805965fdcf0bf7cService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController:editAction' => function () {
            return ${($_ = isset($this->services['service_locator.283c250a0d407c79a3fd038166c4dbca']) ? $this->services['service_locator.283c250a0d407c79a3fd038166c4dbca'] : $this->getServiceLocator_283c250a0d407c79a3fd038166c4dbcaService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController:publishAction' => function () {
            return ${($_ = isset($this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c']) ? $this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c'] : $this->getServiceLocator_145a70212de7d7a82805965fdcf0bf7cService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController:setViewHandler' => function () {
            return ${($_ = isset($this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8']) ? $this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8'] : $this->getServiceLocator_182f5c5b079727c046caf1a16a7b23a8Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\SidebarController:editAction' => function () {
            return ${($_ = isset($this->services['service_locator.4932311ed9e94ef5c70a11a1f02dd887']) ? $this->services['service_locator.4932311ed9e94ef5c70a11a1f02dd887'] : $this->getServiceLocator_4932311ed9e94ef5c70a11a1f02dd887Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\TagController:setViewHandler' => function () {
            return ${($_ = isset($this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8']) ? $this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8'] : $this->getServiceLocator_182f5c5b079727c046caf1a16a7b23a8Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\WidgetController:createArticleWidgetAction' => function () {
            return ${($_ = isset($this->services['service_locator.415ed85eb7b36e4772742e4527c8efb9']) ? $this->services['service_locator.415ed85eb7b36e4772742e4527c8efb9'] : $this->getServiceLocator_415ed85eb7b36e4772742e4527c8efb9Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\WidgetController:createSidebarWidgetAction' => function () {
            return ${($_ = isset($this->services['service_locator.13a95416315a5a31219d365fb7f68978']) ? $this->services['service_locator.13a95416315a5a31219d365fb7f68978'] : $this->getServiceLocator_13a95416315a5a31219d365fb7f68978Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Front\\ContentController:previewAction' => function () {
            return ${($_ = isset($this->services['service_locator.f07affeece1c57b9b4e63280ca6dd701']) ? $this->services['service_locator.f07affeece1c57b9b4e63280ca6dd701'] : $this->getServiceLocator_F07affeece1c57b9b4e63280ca6dd701Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Front\\SearchController:tagSearchAction' => function () {
            return ${($_ = isset($this->services['service_locator.278dce3355138ab2f098b4f258fc9a45']) ? $this->services['service_locator.278dce3355138ab2f098b4f258fc9a45'] : $this->getServiceLocator_278dce3355138ab2f098b4f258fc9a45Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController::actionImageDelete' => function () {
            return ${($_ = isset($this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c']) ? $this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c'] : $this->getServiceLocator_145a70212de7d7a82805965fdcf0bf7cService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController::deleteAction' => function () {
            return ${($_ = isset($this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c']) ? $this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c'] : $this->getServiceLocator_145a70212de7d7a82805965fdcf0bf7cService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController::editAction' => function () {
            return ${($_ = isset($this->services['service_locator.283c250a0d407c79a3fd038166c4dbca']) ? $this->services['service_locator.283c250a0d407c79a3fd038166c4dbca'] : $this->getServiceLocator_283c250a0d407c79a3fd038166c4dbcaService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController::publishAction' => function () {
            return ${($_ = isset($this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c']) ? $this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c'] : $this->getServiceLocator_145a70212de7d7a82805965fdcf0bf7cService()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\ArticleController::setViewHandler' => function () {
            return ${($_ = isset($this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8']) ? $this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8'] : $this->getServiceLocator_182f5c5b079727c046caf1a16a7b23a8Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\SidebarController::editAction' => function () {
            return ${($_ = isset($this->services['service_locator.4932311ed9e94ef5c70a11a1f02dd887']) ? $this->services['service_locator.4932311ed9e94ef5c70a11a1f02dd887'] : $this->getServiceLocator_4932311ed9e94ef5c70a11a1f02dd887Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\TagController::setViewHandler' => function () {
            return ${($_ = isset($this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8']) ? $this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8'] : $this->getServiceLocator_182f5c5b079727c046caf1a16a7b23a8Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\WidgetController::createArticleWidgetAction' => function () {
            return ${($_ = isset($this->services['service_locator.415ed85eb7b36e4772742e4527c8efb9']) ? $this->services['service_locator.415ed85eb7b36e4772742e4527c8efb9'] : $this->getServiceLocator_415ed85eb7b36e4772742e4527c8efb9Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Admin\\WidgetController::createSidebarWidgetAction' => function () {
            return ${($_ = isset($this->services['service_locator.13a95416315a5a31219d365fb7f68978']) ? $this->services['service_locator.13a95416315a5a31219d365fb7f68978'] : $this->getServiceLocator_13a95416315a5a31219d365fb7f68978Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Front\\ContentController::previewAction' => function () {
            return ${($_ = isset($this->services['service_locator.f07affeece1c57b9b4e63280ca6dd701']) ? $this->services['service_locator.f07affeece1c57b9b4e63280ca6dd701'] : $this->getServiceLocator_F07affeece1c57b9b4e63280ca6dd701Service()) && false ?: '_'};
        }, 'Riverway\\Cms\\CoreBundle\\Controller\\Front\\SearchController::tagSearchAction' => function () {
            return ${($_ = isset($this->services['service_locator.278dce3355138ab2f098b4f258fc9a45']) ? $this->services['service_locator.278dce3355138ab2f098b4f258fc9a45'] : $this->getServiceLocator_278dce3355138ab2f098b4f258fc9a45Service()) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'autowired.Riverway\Cms\CoreBundle\Entity\Article' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Entity\Article
     */
    protected function getAutowired_Riverway_Cms_CoreBundle_Entity_ArticleService()
    {
        return $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article'] = new \Riverway\Cms\CoreBundle\Entity\Article();
    }

    /**
     * Gets the private 'autowired.Riverway\Cms\CoreBundle\Entity\Sidebar' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Entity\Sidebar
     */
    protected function getAutowired_Riverway_Cms_CoreBundle_Entity_SidebarService()
    {
        return $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Sidebar'] = new \Riverway\Cms\CoreBundle\Entity\Sidebar();
    }

    /**
     * Gets the private 'autowired.Riverway\Cms\CoreBundle\Entity\Tag' shared autowired service.
     *
     * @return \Riverway\Cms\CoreBundle\Entity\Tag
     */
    protected function getAutowired_Riverway_Cms_CoreBundle_Entity_TagService()
    {
        return $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Tag'] = new \Riverway\Cms\CoreBundle\Entity\Tag();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.annotations.recorder_inner']) ? $this->services['cache.annotations.recorder_inner'] : $this->getCache_Annotations_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.annotations.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Annotations_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.annotations.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Q9JqmG1u11', 0, 'fsj78zw0jcLFPOSqjAVjgS', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.app.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public function getCache_App_RecorderInnerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['cache.app.recorder_inner'] = SymfonyComponentCacheAdapterFilesystemAdapter_000000002ec1546c000000003d95a20a0d2b3f7d0e33910f370727d2c4fe63ce::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getCache_App_RecorderInnerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('LNf3BOv6F6', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }

        return $instance;
    }

    /**
     * Gets the private 'cache.serializer.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Serializer_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.serializer.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('zEHBMJtUov', 0, 'fsj78zw0jcLFPOSqjAVjgS', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.system.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_System_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.system.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('1GCXLYpsg+', 0, 'fsj78zw0jcLFPOSqjAVjgS', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.validator.recorder_inner']) ? $this->services['cache.validator.recorder_inner'] : $this->getCache_Validator_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Validator_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.validator.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('91nAon5kLo', 0, 'fsj78zw0jcLFPOSqjAVjgS', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->services['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(${($_ = isset($this->services['monolog.logger.console']) ? $this->services['monolog.logger.console'] : $this->get('monolog.logger.console', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter('phpstorm://open?file=%f&line=%l', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $this->targetDirs[4], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->getSecurity_Access_AuthenticatedVoterService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->getSecurity_Access_RoleHierarchyVoterService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->getSecurity_Access_ExpressionVoterService()) && false ?: '_'};
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'})));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager')) && false ?: '_'}, true, '_token', ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_rest.allowed_methods_loader' shared service.
     *
     * @return \FOS\RestBundle\Response\AllowedMethodsLoader\AllowedMethodsRouterLoader
     */
    protected function getFosRest_AllowedMethodsLoaderService()
    {
        return $this->services['fos_rest.allowed_methods_loader'] = new \FOS\RestBundle\Response\AllowedMethodsLoader\AllowedMethodsRouterLoader(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, (__DIR__.'/fos_rest'), true);
    }

    /**
     * Gets the private 'fos_rest.request.param_fetcher.reader' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamReader
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_rest.serializer.jms_handler_registry' shared service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry
     */
    protected function getFosRest_Serializer_JmsHandlerRegistryService()
    {
        return $this->services['fos_rest.serializer.jms_handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')))));
    }

    /**
     * Gets the private 'jms_serializer.unserialize_object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->services['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->services['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter
     */
    protected function getSecurity_Access_RoleHierarchyVoterService()
    {
        return $this->services['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.main']) ? $this->services['security.authentication.provider.dao.main'] : $this->getSecurity_Authentication_Provider_Dao_MainService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->getSecurity_Authentication_Provider_Anonymous_MainService()) && false ?: '_'};
        }, 2), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        return $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('59da0ef05b1767.75049427');
    }

    /**
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        return $this->services['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->getSecurity_User_Provider_Concrete_InMemoryService()) && false ?: '_'}, new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->get('security.firewall.map.context.dev')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->get('security.firewall.map.context.main')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d']) ? $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] : $this->getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()) && false ?: '_'};
            yield 'security.firewall.map.context.main' => ${($_ = isset($this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db']) ? $this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db'] : $this->getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()
    {
        return $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/');
    }

    /**
     * Gets the private 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_A64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60dbService()
    {
        return $this->services['security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/');
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the private 'security.user.provider.concrete.in_memory' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        $this->services['security.user.provider.concrete.in_memory'] = $instance = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();

        $instance->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'admin', array()));

        return $instance;
    }

    /**
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->services['security.user_value_resolver'] = new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /**
     * Gets the private 'service_locator.13a95416315a5a31219d365fb7f68978' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_13a95416315a5a31219d365fb7f68978Service()
    {
        return $this->services['service_locator.13a95416315a5a31219d365fb7f68978'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('sidebar' => function () {
            $f = function (\Riverway\Cms\CoreBundle\Entity\Sidebar $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Riverway\Cms\CoreBundle\Entity\Sidebar']) ? $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Sidebar'] : $this->getAutowired_Riverway_Cms_CoreBundle_Entity_SidebarService()) && false ?: '_'});
        }));
    }

    /**
     * Gets the private 'service_locator.145a70212de7d7a82805965fdcf0bf7c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_145a70212de7d7a82805965fdcf0bf7cService()
    {
        return $this->services['service_locator.145a70212de7d7a82805965fdcf0bf7c'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('article' => function () {
            $f = function (\Riverway\Cms\CoreBundle\Entity\Article $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article']) ? $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article'] : $this->getAutowired_Riverway_Cms_CoreBundle_Entity_ArticleService()) && false ?: '_'});
        }));
    }

    /**
     * Gets the private 'service_locator.182f5c5b079727c046caf1a16a7b23a8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_182f5c5b079727c046caf1a16a7b23a8Service()
    {
        return $this->services['service_locator.182f5c5b079727c046caf1a16a7b23a8'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('viewhandler' => function () {
            return ${($_ = isset($this->services['fos_rest.view_handler']) ? $this->services['fos_rest.view_handler'] : $this->get('fos_rest.view_handler')) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'service_locator.278dce3355138ab2f098b4f258fc9a45' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_278dce3355138ab2f098b4f258fc9a45Service()
    {
        return $this->services['service_locator.278dce3355138ab2f098b4f258fc9a45'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('tag' => function () {
            $f = function (\Riverway\Cms\CoreBundle\Entity\Tag $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Riverway\Cms\CoreBundle\Entity\Tag']) ? $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Tag'] : $this->getAutowired_Riverway_Cms_CoreBundle_Entity_TagService()) && false ?: '_'});
        }));
    }

    /**
     * Gets the private 'service_locator.283c250a0d407c79a3fd038166c4dbca' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_283c250a0d407c79a3fd038166c4dbcaService()
    {
        return $this->services['service_locator.283c250a0d407c79a3fd038166c4dbca'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('article' => function () {
            $f = function (\Riverway\Cms\CoreBundle\Entity\Article $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article']) ? $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article'] : $this->getAutowired_Riverway_Cms_CoreBundle_Entity_ArticleService()) && false ?: '_'});
        }));
    }

    /**
     * Gets the private 'service_locator.415ed85eb7b36e4772742e4527c8efb9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_415ed85eb7b36e4772742e4527c8efb9Service()
    {
        return $this->services['service_locator.415ed85eb7b36e4772742e4527c8efb9'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('article' => function () {
            $f = function (\Riverway\Cms\CoreBundle\Entity\Article $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article']) ? $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article'] : $this->getAutowired_Riverway_Cms_CoreBundle_Entity_ArticleService()) && false ?: '_'});
        }));
    }

    /**
     * Gets the private 'service_locator.4932311ed9e94ef5c70a11a1f02dd887' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_4932311ed9e94ef5c70a11a1f02dd887Service()
    {
        return $this->services['service_locator.4932311ed9e94ef5c70a11a1f02dd887'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('sidebar' => function () {
            $f = function (\Riverway\Cms\CoreBundle\Entity\Sidebar $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Riverway\Cms\CoreBundle\Entity\Sidebar']) ? $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Sidebar'] : $this->getAutowired_Riverway_Cms_CoreBundle_Entity_SidebarService()) && false ?: '_'});
        }));
    }

    /**
     * Gets the private 'service_locator.e64d23c3bf770e2cf44b71643280668d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()
    {
        return $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->get('fragment.renderer.esi')) && false ?: '_'};
        }, 'hinclude' => function () {
            return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->get('fragment.renderer.hinclude')) && false ?: '_'};
        }, 'inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'};
        }, 'ssi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.ssi']) ? $this->services['fragment.renderer.ssi'] : $this->get('fragment.renderer.ssi')) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'service_locator.f07affeece1c57b9b4e63280ca6dd701' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_F07affeece1c57b9b4e63280ca6dd701Service()
    {
        return $this->services['service_locator.f07affeece1c57b9b4e63280ca6dd701'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('article' => function () {
            $f = function (\Riverway\Cms\CoreBundle\Entity\Article $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article']) ? $this->services['autowired.Riverway\Cms\CoreBundle\Entity\Article'] : $this->getAutowired_Riverway_Cms_CoreBundle_Entity_ArticleService()) && false ?: '_'});
        }));
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, __DIR__);
    }

    /**
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Metadata\Driver\FileLocator(array());

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain(array(0 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}), 1 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a), 2 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a))), 'Metadata\\ClassHierarchyMetadata', true);
        $b->setCache(new \Metadata\Cache\FileCache((__DIR__.'/vich_uploader')));

        return $this->services['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->services['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ${($_ = isset($this->services['vich_uploader.metadata_reader']) ? $this->services['vich_uploader.metadata_reader'] : $this->getVichUploader_MetadataReaderService()) && false ?: '_'}, array('article_image' => array('uri_prefix' => '/images/article', 'upload_destination' => ($this->targetDirs[3].'/../web/images/article'), 'namer' => array('service' => NULL, 'options' => NULL), 'directory_namer' => array('service' => NULL, 'options' => NULL), 'delete_on_remove' => true, 'delete_on_update' => true, 'inject_on_load' => false, 'db_driver' => 'orm')), '_name');
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'assets.json_manifest_path' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'vich_uploader.mappings' => false,
        'doctrine_migrations.dir_name' => false,
        'sentry.app_path' => false,
        'sentry.options' => false,
        'sentry.prefixes' => false,
        'sentry.excluded_app_paths' => false,
        'sentry.options.app_path' => false,
        'sentry.options.prefixes' => false,
        'sentry.options.excluded_app_paths' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.project_dir': $value = $this->targetDirs[4]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'VichUploaderBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ),
                'KnpPaginatorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/knplabs/knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ),
                'KnpMenuBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/knplabs/knp-menu-bundle'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'FOSJsRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/friendsofsymfony/jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'GuzzleBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle'),
                    'namespace' => 'EightPoints\\Bundle\\GuzzleBundle',
                ),
                'LiipImagineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/liip/imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'JMSSerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'TetranzSelect2EntityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/tetranz/select2entity-bundle/Tetranz/Select2EntityBundle'),
                    'namespace' => 'Tetranz\\Select2EntityBundle',
                ),
                'RiverwayCmsCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/CoreBundle'),
                    'namespace' => 'Riverway\\Cms\\CoreBundle',
                ),
                'RiverwayGridBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/riverway/grid-bundle'),
                    'namespace' => 'Riverway\\Grid',
                ),
                'WhiteOctoberPagerfantaBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/white-october/pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'SentryBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/sentry/sentry-symfony/src/Sentry/SentryBundle'),
                    'namespace' => 'Sentry\\SentryBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'WebServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
            ); break;
            case 'assets.json_manifest_path': $value = ($this->targetDirs[4].'/web/build/manifest.json'); break;
            case 'session.save_path': $value = ($this->targetDirs[4].'/var/sessions/dev'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/config/routing_dev.yml'); break;
            case 'vich_uploader.mappings': $value = array(
                'article_image' => array(
                    'uri_prefix' => '/images/article',
                    'upload_destination' => ($this->targetDirs[3].'/../web/images/article'),
                    'namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'directory_namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
            ); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/DoctrineMigrations'); break;
            case 'sentry.app_path': $value = ($this->targetDirs[3].'/..'); break;
            case 'sentry.options': $value = array(
                'logger' => 'php',
                'server' => NULL,
                'secret_key' => NULL,
                'public_key' => NULL,
                'project' => 1,
                'auto_log_stacks' => false,
                'name' => 'mtlc.local',
                'site' => NULL,
                'tags' => array(

                ),
                'release' => NULL,
                'environment' => 'dev',
                'sample_rate' => 1,
                'trace' => true,
                'timeout' => 2,
                'message_limit' => 1024,
                'exclude' => array(

                ),
                'http_proxy' => NULL,
                'extra' => array(

                ),
                'curl_method' => 'sync',
                'curl_path' => 'curl',
                'curl_ipv4' => true,
                'ca_cert' => NULL,
                'verify_ssl' => true,
                'curl_ssl_version' => NULL,
                'trust_x_forwarded_proto' => false,
                'mb_detect_order' => NULL,
                'error_types' => NULL,
                'app_path' => ($this->targetDirs[3].'/..'),
                'excluded_app_paths' => array(
                    0 => ($this->targetDirs[3].'/../vendor'),
                    1 => ($this->targetDirs[3].'/../app/cache'),
                    2 => ($this->targetDirs[3].'/../var/cache'),
                ),
                'prefixes' => array(
                    0 => ($this->targetDirs[3].'/..'),
                ),
                'install_default_breadcrumb_handlers' => true,
                'install_shutdown_handler' => true,
                'processors' => array(
                    0 => 'Raven_SanitizeDataProcessor',
                ),
                'processorOptions' => array(

                ),
            ); break;
            case 'sentry.prefixes': $value = array(
                0 => ($this->targetDirs[3].'/..'),
            ); break;
            case 'sentry.excluded_app_paths': $value = array(
                0 => ($this->targetDirs[3].'/../vendor'),
                1 => ($this->targetDirs[3].'/../app/cache'),
                2 => ($this->targetDirs[3].'/../var/cache'),
            ); break;
            case 'sentry.options.app_path': $value = ($this->targetDirs[3].'/..'); break;
            case 'sentry.options.prefixes': $value = array(
                0 => ($this->targetDirs[3].'/..'),
            ); break;
            case 'sentry.options.excluded_app_paths': $value = array(
                0 => ($this->targetDirs[3].'/../vendor'),
                1 => ($this->targetDirs[3].'/../app/cache'),
                2 => ($this->targetDirs[3].'/../var/cache'),
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'GuzzleBundle' => 'EightPoints\\Bundle\\GuzzleBundle\\GuzzleBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'TetranzSelect2EntityBundle' => 'Tetranz\\Select2EntityBundle\\TetranzSelect2EntityBundle',
                'RiverwayCmsCoreBundle' => 'Riverway\\Cms\\CoreBundle\\RiverwayCmsCoreBundle',
                'RiverwayGridBundle' => 'Riverway\\Grid\\RiverwayGridBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SentryBundle' => 'Sentry\\SentryBundle\\SentryBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'riverway_cms',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => 'admin@admin.com',
            'mailer_password' => NULL,
            'secret' => '32716f89d6b934582a4513803142c35523458822',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => '32716f89d6b934582a4513803142c35523458822',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => 'phpstorm://open?file=%f&line=%l',
            'debug.file_link_format' => 'phpstorm://open?file=%f&line=%l',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => '@VichUploader/Form/fields.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'bootstrap_3_horizontal_layout.html.twig',
                3 => 'TetranzSelect2EntityBundle:Form:fields.html.twig',
                4 => 'RiverwayCmsCoreBundle:Form:fields.html.twig',
                5 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.server_log' => NULL,
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => 'admin@admin.com',
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:sliding.html.twig',
            'knp_paginator.template.filtration' => 'KnpPaginatorBundle:Pagination:filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => '@RiverwayCmsCore/Menu/knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'guzzle.http_client.class' => 'GuzzleHttp\\Client',
            'guzzle.middleware.class' => 'GuzzleHttp\\Middleware',
            'guzzle.formatter.class' => 'GuzzleHttp\\MessageFormatter',
            'guzzle_bundle.data_collector.class' => 'EightPoints\\Bundle\\GuzzleBundle\\DataCollector\\HttpDataCollector',
            'guzzle_bundle.logger.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Log\\Logger',
            'guzzle_bundle.middleware.log.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Middleware\\LogMiddleware',
            'guzzle_bundle.middleware.event_dispatcher.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Middleware\\EventDispatchMiddleware',
            'guzzle.plugin.header.headers' => array(

            ),
            'guzzle_bundle.middleware.wsse.class' => 'EightPoints\\Guzzle\\WsseAuthMiddleware',
            'guzzle.plugin.wsse.username' => '',
            'guzzle.plugin.wsse.password' => '',
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.cache.signer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Signer',
            'liip_imagine.binary.mime_type_guesser.class' => 'Liip\\ImagineBundle\\Binary\\SimpleMimeTypeGuesser',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.grayscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\GrayscaleFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.scale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ScaleFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.downscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.filter.loader.rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RotateFilterLoader',
            'liip_imagine.filter.loader.flip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\FlipFilterLoader',
            'liip_imagine.filter.loader.interlace.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader',
            'liip_imagine.filter.loader.resample.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResampleFilterLoader',
            'liip_imagine.binary.loader.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FileSystemLoader',
            'liip_imagine.binary.loader.stream.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\StreamLoader',
            'liip_imagine.binary.loader.flysystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FlysystemLoader',
            'liip_imagine.binary.loader.chain.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\ChainLoader',
            'liip_imagine.binary.locator.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Locator\\FileSystemLocator',
            'liip_imagine.binary.locator.filesystem_insecure.class' => 'Liip\\ImagineBundle\\Binary\\Locator\\FileSystemInsecureLocator',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache_web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheWebPathResolver',
            'liip_imagine.cache.resolver.aws_s3.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\AwsS3Resolver',
            'liip_imagine.cache.resolver.cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\CacheResolver',
            'liip_imagine.cache.resolver.flysystem.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\FlysystemResolver',
            'liip_imagine.cache.resolver.proxy.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\ProxyResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.meta_data.reader.class' => 'Imagine\\Image\\Metadata\\ExifMetadataReader',
            'liip_imagine.filter.post_processor.jpegoptim.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor',
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripall' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempdir' => NULL,
            'liip_imagine.filter.post_processor.optipng.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\OptiPngPostProcessor',
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripall' => true,
            'liip_imagine.optipng.tempdir' => NULL,
            'liip_imagine.filter.post_processor.pngquant.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\PngquantPostProcessor',
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.filter.post_processor.mozjpeg.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\MozJpegPostProcessor',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => array(
                'cache' => array(
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => array(

                    ),
                    'post_processors' => array(

                    ),
                ),
                'thumb' => array(
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 120,
                                1 => 90,
                            ),
                            'mode' => 'outbound',
                        ),
                        'background' => array(
                            'size' => array(
                                0 => 124,
                                1 => 94,
                            ),
                            'position' => 'center',
                            'color' => '#000000',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'normal' => array(
                    'quality' => 95,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 500,
                                1 => 400,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
            ),
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'liip_imagine.controller:filterRuntimeAction',
            'liip_imagine.controller.redirect_response_code' => 301,
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'fos_rest.format_listener.rules' => NULL,
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'tetranz_select2_entity.config' => array(
                'minimum_input_length' => 2,
                'page_limit' => 8,
                'allow_clear' => true,
                'delay' => 500,
                'language' => 'en',
                'cache' => false,
                'cache_timeout' => 0,
                'scroll' => true,
                'allow_add' => array(
                    'enabled' => false,
                    'new_tag_text' => ' (NEW)',
                    'new_tag_prefix' => '__',
                    'tag_separators' => '[",", " "]',
                ),
                'width' => NULL,
                'object_manager' => 1,
            ),
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'RiverwayCms Migrations',
            'doctrine_migrations.organize_migrations' => 'year_and_month',
            'sentry.client' => 'Sentry\\SentryBundle\\SentrySymfonyClient',
            'sentry.environment' => 'dev',
            'sentry.dsn' => NULL,
            'sentry.error_types' => NULL,
            'sentry.exception_listener' => 'Sentry\\SentryBundle\\EventListener\\ExceptionListener',
            'sentry.skip_capture' => array(
                0 => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
            ),
            'sentry.release' => NULL,
            'sentry.listener_priorities' => array(
                'request' => 0,
                'kernel_exception' => 0,
                'console_exception' => 0,
            ),
            'sentry.listener_priorities.request' => 0,
            'sentry.listener_priorities.kernel_exception' => 0,
            'sentry.listener_priorities.console_exception' => 0,
            'sentry.options.environment' => 'dev',
            'sentry.options.release' => NULL,
            'sentry.options.error_types' => NULL,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'Riverway\\Cms\\CoreBundle\\Service\\Profiler\\RiverwayCmsCollector' => NULL,
                'guzzle_bundle.data_collector' => array(
                    0 => 'guzzle',
                    1 => 'GuzzleBundle::debug',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.riverway_cms_corebundle_command_fixturesreloadcommand' => 'console.command.riverway_cms_corebundle_command_fixturesreloadcommand',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'console.command.symfony_bundle_webserverbundle_command_serverruncommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstartcommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstopcommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand',
            ),
        );
    }
}

class DoctrineORMEntityManager_000000002ec14f7e000000003d95a20a0d2b3f7d0e33910f370727d2c4fe63ce extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder59da0ef25be9e047094191 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer59da0ef25bec8241931553 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties59da0ef25be0d124050055 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getConnection', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataFactory()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getMetadataFactory', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getExpressionBuilder', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'beginTransaction', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->beginTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getCache', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'transactional', array('func' => $func), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'commit', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'rollback', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->rollback();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata($className)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getClassMetadata', array('className' => $className), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'createQuery', array('dql' => $dql), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'createNamedQuery', array('name' => $name), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'createQueryBuilder', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function flush($entity = null)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'flush', array('entity' => $entity), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->flush($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getPartialReference($entityName, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function clear($entityName = null)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'clear', array('entityName' => $entityName), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'close', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->close();
    }

    /**
     * {@inheritDoc}
     */
    public function persist($entity)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'persist', array('entity' => $entity), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($entity)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'remove', array('entity' => $entity), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->remove($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function refresh($entity)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'refresh', array('entity' => $entity), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->refresh($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function detach($entity)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'detach', array('entity' => $entity), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function merge($entity)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'merge', array('entity' => $entity), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function copy($entity, $deep = false)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->copy($entity, $deep);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository($entityName)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getRepository', array('entityName' => $entityName), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getRepository($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($entity)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'contains', array('entity' => $entity), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getEventManager', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getConfiguration', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'isOpen', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getUnitOfWork', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getUnitOfWork();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->newHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getProxyFactory', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'initializeObject', array('obj' => $obj), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'getFilters', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'isFiltersStateClean', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'hasFilters', array(), $this->initializer59da0ef25bec8241931553);

        return $this->valueHolder59da0ef25be9e047094191->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer59da0ef25bec8241931553 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder59da0ef25be9e047094191) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59da0ef25be9e047094191 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59da0ef25be9e047094191->__construct($conn, $config, $eventManager);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, '__get', ['name' => $name], $this->initializer59da0ef25bec8241931553);

        if (isset(self::$publicProperties59da0ef25be0d124050055[$name])) {
            return $this->valueHolder59da0ef25be9e047094191->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef25be9e047094191;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder59da0ef25be9e047094191;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59da0ef25bec8241931553);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef25be9e047094191;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder59da0ef25be9e047094191;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, '__isset', array('name' => $name), $this->initializer59da0ef25bec8241931553);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef25be9e047094191;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder59da0ef25be9e047094191;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, '__unset', array('name' => $name), $this->initializer59da0ef25bec8241931553);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef25be9e047094191;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder59da0ef25be9e047094191;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, '__clone', array(), $this->initializer59da0ef25bec8241931553);

        $this->valueHolder59da0ef25be9e047094191 = clone $this->valueHolder59da0ef25be9e047094191;
    }

    public function __sleep()
    {
        $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, '__sleep', array(), $this->initializer59da0ef25bec8241931553);

        return array('valueHolder59da0ef25be9e047094191');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer59da0ef25bec8241931553 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer59da0ef25bec8241931553;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer59da0ef25bec8241931553 && $this->initializer59da0ef25bec8241931553->__invoke($this->valueHolder59da0ef25be9e047094191, $this, 'initializeProxy', array(), $this->initializer59da0ef25bec8241931553);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59da0ef25be9e047094191;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59da0ef25be9e047094191;
    }


}

class SymfonyComponentCacheAdapterFilesystemAdapter_000000002ec1546c000000003d95a20a0d2b3f7d0e33910f370727d2c4fe63ce extends \Symfony\Component\Cache\Adapter\FilesystemAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder59da0ef26c703875809536 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer59da0ef26c722369810086 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties59da0ef26c68e905649260 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getItem($key)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'getItem', array('key' => $key), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->getItem($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getItems(array $keys = array())
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'getItems', array('keys' => $keys), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->getItems($keys);
    }

    /**
     * {@inheritDoc}
     */
    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'save', array('item' => $item), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->save($item);
    }

    /**
     * {@inheritDoc}
     */
    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'saveDeferred', array('item' => $item), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->saveDeferred($item);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'commit', array(), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function __destruct()
    {
        $this->initializer59da0ef26c722369810086 || $this->valueHolder59da0ef26c703875809536->__destruct();
    }

    /**
     * {@inheritDoc}
     */
    public function hasItem($key)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'hasItem', array('key' => $key), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->hasItem($key);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'clear', array(), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function deleteItem($key)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'deleteItem', array('key' => $key), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->deleteItem($key);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteItems(array $keys)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'deleteItems', array('keys' => $keys), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->deleteItems($keys);
    }

    /**
     * {@inheritDoc}
     */
    public function enableVersioning($enable = true)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'enableVersioning', array('enable' => $enable), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->enableVersioning($enable);
    }

    /**
     * {@inheritDoc}
     */
    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'setLogger', array('logger' => $logger), $this->initializer59da0ef26c722369810086);

        return $this->valueHolder59da0ef26c703875809536->setLogger($logger);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\FilesystemAdapter $instance) {
            unset($instance->directory, $instance->tmp);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractAdapter $instance) {
            unset($instance->createCacheItem, $instance->mergeByLifetime, $instance->namespace, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractAdapter')->__invoke($instance);

        $instance->initializer59da0ef26c722369810086 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct($namespace = '', $defaultLifetime = 0, $directory = null)
    {
        static $reflection;

        if (! $this->valueHolder59da0ef26c703875809536) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter');
            $this->valueHolder59da0ef26c703875809536 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\FilesystemAdapter $instance) {
            unset($instance->directory, $instance->tmp);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractAdapter $instance) {
            unset($instance->createCacheItem, $instance->mergeByLifetime, $instance->namespace, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractAdapter')->__invoke($this);

        }

        $this->valueHolder59da0ef26c703875809536->__construct($namespace, $defaultLifetime, $directory);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, '__get', ['name' => $name], $this->initializer59da0ef26c722369810086);

        if (isset(self::$publicProperties59da0ef26c68e905649260[$name])) {
            return $this->valueHolder59da0ef26c703875809536->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef26c703875809536;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder59da0ef26c703875809536;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59da0ef26c722369810086);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef26c703875809536;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder59da0ef26c703875809536;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, '__isset', array('name' => $name), $this->initializer59da0ef26c722369810086);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef26c703875809536;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder59da0ef26c703875809536;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, '__unset', array('name' => $name), $this->initializer59da0ef26c722369810086);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef26c703875809536;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder59da0ef26c703875809536;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, '__clone', array(), $this->initializer59da0ef26c722369810086);

        $this->valueHolder59da0ef26c703875809536 = clone $this->valueHolder59da0ef26c703875809536;
    }

    public function __sleep()
    {
        $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, '__sleep', array(), $this->initializer59da0ef26c722369810086);

        return array('valueHolder59da0ef26c703875809536');
    }

    public function __wakeup()
    {
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\FilesystemAdapter $instance) {
            unset($instance->directory, $instance->tmp);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractAdapter $instance) {
            unset($instance->createCacheItem, $instance->mergeByLifetime, $instance->namespace, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractAdapter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer59da0ef26c722369810086 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer59da0ef26c722369810086;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer59da0ef26c722369810086 && $this->initializer59da0ef26c722369810086->__invoke($this->valueHolder59da0ef26c703875809536, $this, 'initializeProxy', array(), $this->initializer59da0ef26c722369810086);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59da0ef26c703875809536;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59da0ef26c703875809536;
    }


}

class FOSRestBundleSerializerJMSSerializerAdapter_000000002ec1591b000000003d95a20a0d2b3f7d0e33910f370727d2c4fe63ce extends \FOS\RestBundle\Serializer\JMSSerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder59da0ef273b53042961710 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer59da0ef273b77494674711 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties59da0ef273af6256648086 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function serialize($data, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializer59da0ef273b77494674711);

        return $this->valueHolder59da0ef273b53042961710->serialize($data, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function deserialize($data, $type, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializer59da0ef273b77494674711);

        return $this->valueHolder59da0ef273b53042961710->deserialize($data, $type, $format, $context);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $instance, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($instance);

        $instance->initializer59da0ef273b77494674711 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\JMS\Serializer\SerializerInterface $serializer)
    {
        static $reflection;

        if (! $this->valueHolder59da0ef273b53042961710) {
            $reflection = $reflection ?: new \ReflectionClass('FOS\\RestBundle\\Serializer\\JMSSerializerAdapter');
            $this->valueHolder59da0ef273b53042961710 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);

        }

        $this->valueHolder59da0ef273b53042961710->__construct($serializer);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, '__get', ['name' => $name], $this->initializer59da0ef273b77494674711);

        if (isset(self::$publicProperties59da0ef273af6256648086[$name])) {
            return $this->valueHolder59da0ef273b53042961710->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef273b53042961710;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder59da0ef273b53042961710;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59da0ef273b77494674711);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef273b53042961710;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder59da0ef273b53042961710;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, '__isset', array('name' => $name), $this->initializer59da0ef273b77494674711);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef273b53042961710;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder59da0ef273b53042961710;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, '__unset', array('name' => $name), $this->initializer59da0ef273b77494674711);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59da0ef273b53042961710;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder59da0ef273b53042961710;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, '__clone', array(), $this->initializer59da0ef273b77494674711);

        $this->valueHolder59da0ef273b53042961710 = clone $this->valueHolder59da0ef273b53042961710;
    }

    public function __sleep()
    {
        $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, '__sleep', array(), $this->initializer59da0ef273b77494674711);

        return array('valueHolder59da0ef273b53042961710');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer59da0ef273b77494674711 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer59da0ef273b77494674711;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer59da0ef273b77494674711 && $this->initializer59da0ef273b77494674711->__invoke($this->valueHolder59da0ef273b53042961710, $this, 'initializeProxy', array(), $this->initializer59da0ef273b77494674711);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59da0ef273b53042961710;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59da0ef273b53042961710;
    }


}
