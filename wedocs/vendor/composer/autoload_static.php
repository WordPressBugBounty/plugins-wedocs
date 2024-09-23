<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf693799f0d09967c6cc361b15a8b7447
{
    public static $files = array (
        'bc33bdda64b68124ebec25fc6f289c9e' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WeDevs\\WeDocs\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WeDevs\\WeDocs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WeDevs\\WeDocs\\API' => __DIR__ . '/../..' . '/includes/API.php',
        'WeDevs\\WeDocs\\API\\API' => __DIR__ . '/../..' . '/includes/API/API.php',
        'WeDevs\\WeDocs\\API\\SettingsApi' => __DIR__ . '/../..' . '/includes/API/SettingsApi.php',
        'WeDevs\\WeDocs\\API\\UpgraderApi' => __DIR__ . '/../..' . '/includes/API/UpgraderApi.php',
        'WeDevs\\WeDocs\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'WeDevs\\WeDocs\\Admin\\Admin' => __DIR__ . '/../..' . '/includes/Admin/Admin.php',
        'WeDevs\\WeDocs\\Admin\\Docs_List_Table' => __DIR__ . '/../..' . '/includes/Admin/Docs_List_Table.php',
        'WeDevs\\WeDocs\\Admin\\Menu' => __DIR__ . '/../..' . '/includes/Admin/Menu.php',
        'WeDevs\\WeDocs\\Admin\\Migrate' => __DIR__ . '/../..' . '/includes/Admin/Migrate.php',
        'WeDevs\\WeDocs\\Ajax' => __DIR__ . '/../..' . '/includes/Ajax.php',
        'WeDevs\\WeDocs\\Appsero\\Client' => __DIR__ . '/../..' . '/includes/Appsero/Client.php',
        'WeDevs\\WeDocs\\Appsero\\Insights' => __DIR__ . '/../..' . '/includes/Appsero/Insights.php',
        'WeDevs\\WeDocs\\Appsero\\License' => __DIR__ . '/../..' . '/includes/Appsero/License.php',
        'WeDevs\\WeDocs\\Assets' => __DIR__ . '/../..' . '/includes/Assets.php',
        'WeDevs\\WeDocs\\Capability' => __DIR__ . '/../..' . '/includes/Capability.php',
        'WeDevs\\WeDocs\\Frontend' => __DIR__ . '/../..' . '/includes/Frontend.php',
        'WeDevs\\WeDocs\\Installer' => __DIR__ . '/../..' . '/includes/Installer.php',
        'WeDevs\\WeDocs\\Post_Types' => __DIR__ . '/../..' . '/includes/Post_Types.php',
        'WeDevs\\WeDocs\\Shortcode' => __DIR__ . '/../..' . '/includes/Shortcode.php',
        'WeDevs\\WeDocs\\Theme\\Astra' => __DIR__ . '/../..' . '/includes/Theme/Astra.php',
        'WeDevs\\WeDocs\\Theme\\Twenty_Fifteen' => __DIR__ . '/../..' . '/includes/Theme/Twenty_Fifteen.php',
        'WeDevs\\WeDocs\\Theme\\Twenty_Seventeen' => __DIR__ . '/../..' . '/includes/Theme/Twenty_Seventeen.php',
        'WeDevs\\WeDocs\\Theme_Support' => __DIR__ . '/../..' . '/includes/Theme_Support.php',
        'WeDevs\\WeDocs\\Upgrader\\Abstracts\\UpgradeHandler' => __DIR__ . '/../..' . '/includes/Upgrader/Abstracts/UpgradeHandler.php',
        'WeDevs\\WeDocs\\Upgrader\\Upgrader' => __DIR__ . '/../..' . '/includes/Upgrader/Upgrader.php',
        'WeDevs\\WeDocs\\Upgrader\\Upgrades\\Upgrades' => __DIR__ . '/../..' . '/includes/Upgrader/Upgrades/Upgrades.php',
        'WeDevs\\WeDocs\\Upgrader\\Upgrades\\V_2_0_2' => __DIR__ . '/../..' . '/includes/Upgrader/Upgrades/V_2_0_2.php',
        'WeDevs\\WeDocs\\Walker' => __DIR__ . '/../..' . '/includes/Walker.php',
        'WeDevs\\WeDocs\\Widget' => __DIR__ . '/../..' . '/includes/Widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf693799f0d09967c6cc361b15a8b7447::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf693799f0d09967c6cc361b15a8b7447::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf693799f0d09967c6cc361b15a8b7447::$classMap;

        }, null, ClassLoader::class);
    }
}
