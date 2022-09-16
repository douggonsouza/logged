<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit600642fd9b5945b339a2d25ac27b849e
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'douggonsouza\\propertys\\' => 23,
            'douggonsouza\\mvc\\' => 17,
            'douggonsouza\\logged\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'douggonsouza\\propertys\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/propertys/src',
        ),
        'douggonsouza\\mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/mvc/src',
        ),
        'douggonsouza\\logged\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'douggonsouza\\logged\\logged' => __DIR__ . '/../..' . '/src/logged.php',
        'douggonsouza\\logged\\models\\user' => __DIR__ . '/../..' . '/src/models/user.php',
        'douggonsouza\\mvc\\control\\act' => __DIR__ . '/..' . '/douggonsouza/mvc/src/control/act.php',
        'douggonsouza\\mvc\\control\\actInterface' => __DIR__ . '/..' . '/douggonsouza/mvc/src/control/actInterface.php',
        'douggonsouza\\mvc\\control\\exiting' => __DIR__ . '/..' . '/douggonsouza/mvc/src/control/exiting.php',
        'douggonsouza\\mvc\\model\\connection\\conn' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/connection/conn.php',
        'douggonsouza\\mvc\\model\\model' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/model.php',
        'douggonsouza\\mvc\\model\\modelInterface' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/modelInterface.php',
        'douggonsouza\\mvc\\model\\resource\\resource' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/resource/resource.php',
        'douggonsouza\\mvc\\model\\resource\\resourceInterface' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/resource/resourceInterface.php',
        'douggonsouza\\mvc\\model\\utils' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/utils.php',
        'douggonsouza\\mvc\\model\\validate\\isdatetime' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/validate/isdatetime.php',
        'douggonsouza\\mvc\\model\\validate\\isemail' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/validate/isemail.php',
        'douggonsouza\\mvc\\model\\validate\\isnumber' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/validate/isnumber.php',
        'douggonsouza\\mvc\\model\\validate\\isstring' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/validate/isstring.php',
        'douggonsouza\\mvc\\model\\validate\\limit' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/validate/limit.php',
        'douggonsouza\\mvc\\model\\validate\\notnull' => __DIR__ . '/..' . '/douggonsouza/mvc/src/model/validate/notnull.php',
        'douggonsouza\\mvc\\view\\display' => __DIR__ . '/..' . '/douggonsouza/mvc/src/view/display.php',
        'douggonsouza\\mvc\\view\\mimes' => __DIR__ . '/..' . '/douggonsouza/mvc/src/view/mimes.php',
        'douggonsouza\\mvc\\view\\view' => __DIR__ . '/..' . '/douggonsouza/mvc/src/view/view.php',
        'douggonsouza\\propertys\\propertys' => __DIR__ . '/..' . '/douggonsouza/propertys/src/propertys.php',
        'douggonsouza\\propertys\\propertysInterface' => __DIR__ . '/..' . '/douggonsouza/propertys/src/propertysInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit600642fd9b5945b339a2d25ac27b849e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit600642fd9b5945b339a2d25ac27b849e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit600642fd9b5945b339a2d25ac27b849e::$classMap;

        }, null, ClassLoader::class);
    }
}
