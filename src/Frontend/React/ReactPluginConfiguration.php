<?php

namespace MicroCRM\Frontend\React;

use Micro\Framework\Kernel\Configuration\PluginConfiguration;

class ReactPluginConfiguration extends PluginConfiguration
{
    public function getEnv(): string
    {
        return $this->configuration->get('APP_ENV');
    }
}
