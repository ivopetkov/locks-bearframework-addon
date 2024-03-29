<?php

/*
 * Locks addon for Bear Framework
 * https://github.com/ivopetkov/locks-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();
$context = $app->contexts->get(__DIR__);

$context->classes
    ->add('IvoPetkov\BearFrameworkAddons\Locks', 'classes/Locks.php');

$app->shortcuts
    ->add('locks', function () {
        return new IvoPetkov\BearFrameworkAddons\Locks();
    });
