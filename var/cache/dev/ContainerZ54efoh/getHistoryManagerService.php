<?php

namespace ContainerZ54efoh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHistoryManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\HistoryManager' shared autowired service.
     *
     * @return \App\Service\HistoryManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/HistoryManager.php';
        include_once \dirname(__DIR__, 4).'/src/Service/FileManager.php';
        include_once \dirname(__DIR__, 4).'/src/Service/JsonManager.php';

        return $container->privates['App\\Service\\HistoryManager'] = new \App\Service\HistoryManager(new \App\Service\FileManager((\dirname(__DIR__, 4).'/public/in')), new \App\Service\JsonManager(), ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')), ($container->privates['App\\Repository\\HistoryRepository'] ?? $container->load('getHistoryRepositoryService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
