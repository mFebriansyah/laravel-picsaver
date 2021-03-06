<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'BaseException' => $baseDir . '/app/exceptions/BaseException.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'Embed' => $baseDir . '/app/libraries/Embed.php',
    'Helper' => $baseDir . '/app/libraries/Helper.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'ValidationException' => $baseDir . '/app/exceptions/ValidationException.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
    'controllers\\api\\v1b1\\AlbumController' => $baseDir . '/app/controllers/api/v1b1/AlbumController.php',
    'controllers\\api\\v1b1\\ImageController' => $baseDir . '/app/controllers/api/v1b1/ImageController.php',
    'controllers\\api\\v1b1\\UserController' => $baseDir . '/app/controllers/api/v1b1/UserController.php',
    'controllers\\web\\v1b1\\AlbumController' => $baseDir . '/app/controllers/web/v1b1/AlbumController.php',
    'controllers\\web\\v1b1\\HomeController' => $baseDir . '/app/controllers/web/v1b1/HomeController.php',
    'controllers\\web\\v1b1\\ImageController' => $baseDir . '/app/controllers/web/v1b1/ImageController.php',
    'models\\v1b1\\Album' => $baseDir . '/app/models/v1b1/Album.php',
    'models\\v1b1\\Image' => $baseDir . '/app/models/v1b1/Image.php',
    'models\\v1b1\\ImageDownload' => $baseDir . '/app/models/v1b1/ImageDownload.php',
    'models\\v1b1\\ImageLike' => $baseDir . '/app/models/v1b1/ImageLike.php',
    'models\\v1b1\\ImagePin' => $baseDir . '/app/models/v1b1/ImagePin.php',
    'models\\v1b1\\ImageTag' => $baseDir . '/app/models/v1b1/ImageTag.php',
    'models\\v1b1\\ImageView' => $baseDir . '/app/models/v1b1/ImageView.php',
    'models\\v1b1\\Permission' => $baseDir . '/app/models/v1b1/Permission.php',
    'models\\v1b1\\Privilege' => $baseDir . '/app/models/v1b1/Privilege.php',
    'models\\v1b1\\PrivilegePermission' => $baseDir . '/app/models/v1b1/PrivilegePermission.php',
    'models\\v1b1\\Tag' => $baseDir . '/app/models/v1b1/Tag.php',
    'models\\v1b1\\User' => $baseDir . '/app/models/v1b1/User.php',
);
