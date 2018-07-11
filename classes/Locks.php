<?php

/*
 * Locks addon for Bear Framework
 * https://github.com/ivopetkov/locks-bearframework-addon
 * Copyright (c) Ivo Petkov
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
     * @param string $options
     */
    public function acquire(string $key, array $options = []): void
    {
        $temp = [];
        if (isset($options['timeout'])) {
            $temp['timeout'] = $options['timeout'];
        }
        Lock::acquire($key, $temp);
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
