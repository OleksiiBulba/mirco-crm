<?php

declare(strict_types=1);

return [
    // Core plugins
    Micro\Plugin\Locator\LocatorPlugin::class,
    Micro\Plugin\Configuration\Helper\ConfigurationHelperPlugin::class,
    Micro\Plugin\Http\HttpPlugin::class,
    Micro\Plugin\Console\ConsolePlugin::class,
    Micro\Plugin\Logger\Monolog\MonologPlugin::class,
    Micro\Plugin\Twig\TwigPlugin::class,
    //

    MicroCRM\Home\HomePlugin::class,
    OleksiiBulba\WebpackEncorePlugin\WebpackEncorePlugin::class,
    MicroCRM\User\UserPlugin::class,
];
