<?php
/**
 * Created by PhpStorm.
 * User: marcl
 * Date: 04/04/2016
 * Time: 12:28
 */

namespace Lebr1\Registry;


class ArrayRegistry extends AbstractRegistry
{
    private $_data = array();

    public function has($key)
    {
        return isset($this->_data[$key]);
    }

    public function set($key,$value)
    {
        $this->_data[$key] = $value;
    }

    public function get($key)
    {
        return isset($this->_data[$key]) ? $this->_data[$key] : null;
    }

    public function clear()
    {
        $this->_data = array();
    }
}