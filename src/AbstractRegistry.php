<?php
/**
 * Created by PhpStorm.
 * User: marcl
 * Date: 04/04/2016
 * Time: 12:15
 */

namespace Lebr1\Registry;


abstract class AbstractRegistry
{
    /**
     * @var array
     */
    protected static $_instances = array();

    /**
     * AbstractRegistry constructor overriden by subclasses
     */
    protected function __construct() {}

    /**
     * Prevent instance cloning
     */
    protected function __clone() {}

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        $class = get_called_class();
        if(! isset(self::$_instances[$class])) {
            self::$_instances[$class] = new $class;
        }
        return self::$_instances[$class];
    }

    /**
     * implemented by subclasses
     *
     * @param $key
     * @return mixed
     */
    abstract public function has($key);
    
    /**
     * implemented by subclasses
     *
     * @param $key
     * @param $value
     * @return mixed
     */
    abstract public function set($key, $value);

    /**
     * implemented by subclasses
     *
     * @param $key
     * @return mixed
     */
    abstract public function get($key);

    /**
     * implemented by subclasses
     *
     * @return mixed
     */
    abstract public function clear();
}