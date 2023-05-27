<?php

namespace ContainerJNmvCWt;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder93513 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5c428 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescbefd = [
        
    ];

    public function getConnection()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getConnection', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getMetadataFactory', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getExpressionBuilder', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'beginTransaction', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getCache', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'transactional', array('func' => $func), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'commit', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->commit();
    }

    public function rollback()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'rollback', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getClassMetadata', array('className' => $className), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'createQuery', array('dql' => $dql), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'createNamedQuery', array('name' => $name), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'createQueryBuilder', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'flush', array('entity' => $entity), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'clear', array('entityName' => $entityName), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->clear($entityName);
    }

    public function close()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'close', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->close();
    }

    public function persist($entity)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'persist', array('entity' => $entity), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'remove', array('entity' => $entity), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'refresh', array('entity' => $entity), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'detach', array('entity' => $entity), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'merge', array('entity' => $entity), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'contains', array('entity' => $entity), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getEventManager', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getConfiguration', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'isOpen', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getUnitOfWork', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getProxyFactory', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'initializeObject', array('obj' => $obj), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'getFilters', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'isFiltersStateClean', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'hasFilters', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return $this->valueHolder93513->hasFilters();
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

        $instance->initializer5c428 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder93513) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder93513 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder93513->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, '__get', ['name' => $name], $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        if (isset(self::$publicPropertiescbefd[$name])) {
            return $this->valueHolder93513->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93513;

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

        $targetObject = $this->valueHolder93513;
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
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93513;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder93513;
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
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, '__isset', array('name' => $name), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93513;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder93513;
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
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, '__unset', array('name' => $name), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93513;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder93513;
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
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, '__clone', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        $this->valueHolder93513 = clone $this->valueHolder93513;
    }

    public function __sleep()
    {
        $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, '__sleep', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;

        return array('valueHolder93513');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5c428 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5c428;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5c428 && ($this->initializer5c428->__invoke($valueHolder93513, $this, 'initializeProxy', array(), $this->initializer5c428) || 1) && $this->valueHolder93513 = $valueHolder93513;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder93513;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder93513;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
