<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fd3b61dfe4fd7ad5cad531e15b6224d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Auxiliaire' => __DIR__ . '/../..' . '/src/Auxiliaire.php',
        'App\\Ave' => __DIR__ . '/../..' . '/src/Ave.php',
        'App\\Estre' => __DIR__ . '/../..' . '/src/Estre.php',
        'App\\Helpers' => __DIR__ . '/../..' . '/src/Helpers.php',
        'App\\Irreguliers' => __DIR__ . '/../..' . '/src/Irreguliers.php',
        'App\\Mode\\ConditionnelPresent' => __DIR__ . '/../..' . '/src/Mode/ConditionnelPresent.php',
        'App\\Mode\\Futur' => __DIR__ . '/../..' . '/src/Mode/Futur.php',
        'App\\Mode\\Imparfait' => __DIR__ . '/../..' . '/src/Mode/Imparfait.php',
        'App\\Mode\\Imperatif' => __DIR__ . '/../..' . '/src/Mode/Imperatif.php',
        'App\\Mode\\ParticipePasse' => __DIR__ . '/../..' . '/src/Mode/ParticipePasse.php',
        'App\\Mode\\ParticipePresent' => __DIR__ . '/../..' . '/src/Mode/ParticipePresent.php',
        'App\\Mode\\PasseSimple' => __DIR__ . '/../..' . '/src/Mode/PasseSimple.php',
        'App\\Mode\\Present' => __DIR__ . '/../..' . '/src/Mode/Present.php',
        'App\\Mode\\SubjonctifImparfait' => __DIR__ . '/../..' . '/src/Mode/SubjonctifImparfait.php',
        'App\\Mode\\SubjonctifPresent' => __DIR__ . '/../..' . '/src/Mode/SubjonctifPresent.php',
        'App\\Temps' => __DIR__ . '/../..' . '/src/Temps.php',
        'App\\Verbe' => __DIR__ . '/../..' . '/src/Verbe.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fd3b61dfe4fd7ad5cad531e15b6224d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fd3b61dfe4fd7ad5cad531e15b6224d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6fd3b61dfe4fd7ad5cad531e15b6224d::$classMap;

        }, null, ClassLoader::class);
    }
}
