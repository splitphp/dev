<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffe33717c8e7dc210b0316ae48d558fe
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SplitPHP\\' => 9,
        ),
        'O' => 
        array (
            'OomphInc\\ComposerInstallersExtender\\' => 36,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SplitPHP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/modules/addresses',
            1 => __DIR__ . '/../..' . '/modules/bpm',
            2 => __DIR__ . '/../..' . '/modules/filemanager',
            3 => __DIR__ . '/../..' . '/modules/iam',
            4 => __DIR__ . '/../..' . '/modules/log',
            5 => __DIR__ . '/../..' . '/modules/messaging',
            6 => __DIR__ . '/../..' . '/modules/modcontrol',
            7 => __DIR__ . '/../..' . '/modules/settings',
            8 => __DIR__ . '/../..' . '/modules/utils',
            9 => __DIR__ . '/../..' . '/modules/multitenancy',
        ),
        'OomphInc\\ComposerInstallersExtender\\' => 
        array (
            0 => __DIR__ . '/..' . '/oomphinc/composer-installers-extender/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffe33717c8e7dc210b0316ae48d558fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffe33717c8e7dc210b0316ae48d558fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitffe33717c8e7dc210b0316ae48d558fe::$classMap;

        }, null, ClassLoader::class);
    }
}
