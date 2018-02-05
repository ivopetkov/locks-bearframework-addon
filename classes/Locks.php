<?php

/*
 * Locks addon for Bear Framework
 * https://github.com/ivopetkov/locks-bearframework-addon
 * Copyright (c) 2018 Ivo Petkov
 * Free to use under the MIT license.
 */

namespace IvoPetkov\BearFrameworkAddons;

use IvoPetkov\Lock;

/**
 * 
 */
class Locks
{

    /**
     * 
     * @param string $key
     */
    public function acquire(string $key): void
    {
        Lock::acquire($key);
    }

    /**
     * 
     * @param string $key
     */
    public function release(string $key): void
    {
        Lock::release($key);
    }

    /**
     * 
     * @param string $key
     * @return bool
     */
    public function exists(string $key): bool
    {
        return Lock::exists($key);
    }

    /**
     * 
     * @param string $prefix
     */
    public function setKeyPrefix(string $prefix): void
    {
        Lock::setKeyPrefix($prefix);
    }

    /**
     * 
     * @return string
     */
    public function getKeyPrefix(): string
    {
        return (string) Lock::getKeyPrefix();
    }

}
