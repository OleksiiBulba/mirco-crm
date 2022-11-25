<?php

namespace MicroCRM\Home;

use Micro\Framework\Kernel\Configuration\PluginConfiguration;

class HomePluginConfiguration extends PluginConfiguration
{
    public function getEnv(): string
    {
        return $this->configuration->get('APP_ENV');
    }
}