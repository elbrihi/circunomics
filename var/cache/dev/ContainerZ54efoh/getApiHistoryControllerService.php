<?php

namespace ContainerZ54efoh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiHistoryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiHistoryController' shared autowired service.
     *
     * @return \App\Controller\ApiHistoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ApiHistoryController.php';

        $container->services['App\\Controller\\ApiHistoryController'] = $instance = new \App\Controller\ApiHistoryController(($container->privates['App\\Service\\HistoryManager'] ?? $container->load('getHistoryManagerService')));

        $instance->setContainer(($container->privates['.service_locator.B_fynoQ'] ?? $container->load('get_ServiceLocator_BFynoQService'))->withContext('App\\Controller\\ApiHistoryController', $container));

        return $instance;
    }
}
