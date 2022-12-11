<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd0834 = null;
    private $initializer48704 = null;
    private static $publicProperties0556b = [
        
    ];
    public function getConnection()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getConnection', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getMetadataFactory', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getExpressionBuilder', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'beginTransaction', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getCache', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getCache();
    }
    public function transactional($func)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'transactional', array('func' => $func), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'wrapInTransaction', array('func' => $func), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'commit', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->commit();
    }
    public function rollback()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'rollback', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getClassMetadata', array('className' => $className), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'createQuery', array('dql' => $dql), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'createNamedQuery', array('name' => $name), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'createQueryBuilder', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'flush', array('entity' => $entity), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'clear', array('entityName' => $entityName), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->clear($entityName);
    }
    public function close()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'close', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->close();
    }
    public function persist($entity)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'persist', array('entity' => $entity), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'remove', array('entity' => $entity), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'refresh', array('entity' => $entity), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'detach', array('entity' => $entity), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'merge', array('entity' => $entity), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getRepository', array('entityName' => $entityName), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'contains', array('entity' => $entity), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getEventManager', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getConfiguration', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'isOpen', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getUnitOfWork', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getProxyFactory', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'initializeObject', array('obj' => $obj), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'getFilters', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'isFiltersStateClean', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'hasFilters', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return $this->valueHolderd0834->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer48704 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd0834) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd0834 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd0834->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, '__get', ['name' => $name], $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        if (isset(self::$publicProperties0556b[$name])) {
            return $this->valueHolderd0834->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0834;
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
        $targetObject = $this->valueHolderd0834;
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
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0834;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd0834;
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
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, '__isset', array('name' => $name), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0834;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd0834;
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
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, '__unset', array('name' => $name), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0834;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd0834;
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
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, '__clone', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        $this->valueHolderd0834 = clone $this->valueHolderd0834;
    }
    public function __sleep()
    {
        $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, '__sleep', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
        return array('valueHolderd0834');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer48704 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer48704;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer48704 && ($this->initializer48704->__invoke($valueHolderd0834, $this, 'initializeProxy', array(), $this->initializer48704) || 1) && $this->valueHolderd0834 = $valueHolderd0834;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd0834;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd0834;
    }
}
