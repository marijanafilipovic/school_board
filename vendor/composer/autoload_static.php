<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97174c2c69f3baf6eb4a47e28fa78bfe
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/App',
    );

    public static $classMap = array (
        'App\\Board\\BoardAbstract' => __DIR__ . '/../..' . '/App/Board/BoradAbstract.php',
        'App\\Board\\BoardFactory' => __DIR__ . '/../..' . '/App/Board/BoardFactory.php',
        'App\\Board\\CSM' => __DIR__ . '/../..' . '/App/Board/CSM.php',
        'App\\Board\\CSMB' => __DIR__ . '/../..' . '/App/Board/CSMB.php',
        'App\\DBconnect' => __DIR__ . '/../..' . '/App/DBconn.php',
        'App\\Student' => __DIR__ . '/../..' . '/App/Student.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit97174c2c69f3baf6eb4a47e28fa78bfe::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit97174c2c69f3baf6eb4a47e28fa78bfe::$classMap;

        }, null, ClassLoader::class);
    }
}
