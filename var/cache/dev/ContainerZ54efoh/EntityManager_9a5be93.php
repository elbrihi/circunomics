<?php

namespace ContainerZ54efoh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercf77b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04f8f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7f6ba = [
        
    ];

    public function getConnection()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getConnection', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getMetadataFactory', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getExpressionBuilder', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'beginTransaction', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getCache', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'transactional', array('func' => $func), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'commit', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->commit();
    }

    public function rollback()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'rollback', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getClassMetadata', array('className' => $className), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'createQuery', array('dql' => $dql), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'createNamedQuery', array('name' => $name), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'createQueryBuilder', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'flush', array('entity' => $entity), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'clear', array('entityName' => $entityName), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->clear($entityName);
    }

    public function close()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'close', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->close();
    }

    public function persist($entity)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'persist', array('entity' => $entity), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'remove', array('entity' => $entity), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'refresh', array('entity' => $entity), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'detach', array('entity' => $entity), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'merge', array('entity' => $entity), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'contains', array('entity' => $entity), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getEventManager', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getConfiguration', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'isOpen', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getUnitOfWork', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getProxyFactory', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'initializeObject', array('obj' => $obj), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'getFilters', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'isFiltersStateClean', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'hasFilters', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return $this->valueHoldercf77b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer04f8f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercf77b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercf77b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercf77b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, '__get', ['name' => $name], $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        if (isset(self::$publicProperties7f6ba[$name])) {
            return $this->valueHoldercf77b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf77b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf77b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf77b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf77b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, '__isset', array('name' => $name), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf77b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercf77b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, '__unset', array('name' => $name), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf77b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercf77b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, '__clone', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        $this->valueHoldercf77b = clone $this->valueHoldercf77b;
    }

    public function __sleep()
    {
        $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, '__sleep', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;

        return array('valueHoldercf77b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer04f8f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer04f8f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer04f8f && ($this->initializer04f8f->__invoke($valueHoldercf77b, $this, 'initializeProxy', array(), $this->initializer04f8f) || 1) && $this->valueHoldercf77b = $valueHoldercf77b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf77b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf77b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
