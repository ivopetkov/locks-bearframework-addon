<?php

/*
 * Locks addon for Bear Framework
 * https://github.com/ivopetkov/locks-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

/**
 * @runTestsInSeparateProcesses
 */
class LocksTest extends BearFrameworkAddonTestCase
{

    /**
     * 
     */
    public function testLocks()
    {
        $app = $this->getApp();

        $this->assertFalse($app->locks->exists('key1'));
        $app->locks->acquire('key1');
        $this->assertTrue($app->locks->exists('key1'));
        $app->locks->release('key1');
        $this->assertFalse($app->locks->exists('key1'));
    }

    /**
     * 
     */
    public function testKeyPrefix()
    {
        $app = $this->getApp();

        $this->assertTrue($app->locks->getKeyPrefix() === '');
        $this->assertFalse($app->locks->exists('key1'));

        $app->locks->acquire('key1');
        $this->assertTrue($app->locks->exists('key1'));

        $app->locks->setKeyPrefix('prefix1');
        $this->assertFalse($app->locks->exists('key1'));

        $app->locks->setKeyPrefix('');
        $this->assertTrue($app->locks->exists('key1'));

        $app->locks->release('key1');
        $this->assertFalse($app->locks->exists('key1'));
    }

}
