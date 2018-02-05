<?php

/*
 * Locks addon for Bear Framework
 * https://github.com/ivopetkov/locks-bearframework-addon
 * Copyright (c) 2018 Ivo Petkov
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();
$context = $app->context->get(__FILE__);

$context->classes
        ->add('IvoPetkov\BearFrameworkAddons\Locks', 'classes/Locks.php');

$app->shortcuts
        ->add('locks', function() {
            return new IvoPetkov\BearFrameworkAddons\Locks();
        });
