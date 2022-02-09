<?php

namespace ContainerJio5yMR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc8a42 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a03b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2468a = [
        
    ];

    public function getConnection()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getConnection', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getMetadataFactory', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getExpressionBuilder', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'beginTransaction', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getCache', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'transactional', array('func' => $func), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'commit', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->commit();
    }

    public function rollback()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'rollback', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'createQuery', array('dql' => $dql), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'createQueryBuilder', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'flush', array('entity' => $entity), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'clear', array('entityName' => $entityName), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->clear($entityName);
    }

    public function close()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'close', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->close();
    }

    public function persist($entity)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'persist', array('entity' => $entity), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'remove', array('entity' => $entity), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'refresh', array('entity' => $entity), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'detach', array('entity' => $entity), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'merge', array('entity' => $entity), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'contains', array('entity' => $entity), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getEventManager', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getConfiguration', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'isOpen', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getUnitOfWork', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getProxyFactory', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'getFilters', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'isFiltersStateClean', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'hasFilters', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return $this->valueHolderc8a42->hasFilters();
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

        $instance->initializer5a03b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc8a42) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc8a42 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc8a42->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, '__get', ['name' => $name], $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        if (isset(self::$publicProperties2468a[$name])) {
            return $this->valueHolderc8a42->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8a42;

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

        $targetObject = $this->valueHolderc8a42;
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
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8a42;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc8a42;
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
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, '__isset', array('name' => $name), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8a42;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc8a42;
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
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, '__unset', array('name' => $name), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8a42;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc8a42;
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
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, '__clone', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        $this->valueHolderc8a42 = clone $this->valueHolderc8a42;
    }

    public function __sleep()
    {
        $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, '__sleep', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;

        return array('valueHolderc8a42');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5a03b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5a03b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5a03b && ($this->initializer5a03b->__invoke($valueHolderc8a42, $this, 'initializeProxy', array(), $this->initializer5a03b) || 1) && $this->valueHolderc8a42 = $valueHolderc8a42;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8a42;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc8a42;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
