<?php

namespace MicroCRM\Home;

use Micro\Component\DependencyInjection\Container;
use Micro\Framework\Kernel\Configuration\PluginConfigurationInterface;
use Micro\Framework\Kernel\Plugin\ConfigurableInterface;
use Micro\Framework\Kernel\Plugin\DependencyProviderInterface;
use MicroCRM\Home\Facade\HomeFacade;
use MicroCRM\Home\Facade\HomeFacadeInterface;

class HomePlugin implements DependencyProviderInterface, ConfigurableInterface
{
    private readonly PluginConfigurationInterface $configuration;

    /**
     * {@inheritDoc}
     */
    public function provideDependencies(Container $container): void
    {
        $container->register(HomeFacadeInterface::class, function () {
            return $this->createFacade();
        });
    }

    protected function createFacade(): HomeFacadeInterface
    {
        return new HomeFacade($this->configuration());
    }

    /**
     * @return HomePluginConfiguration
     */
    public function configuration(): PluginConfigurationInterface
    {
        return $this->configuration;
    }

    /**
     * {@inheritDoc}
     */
    public function setConfiguration(PluginConfigurationInterface $pluginConfiguration): void
    {
        $this->configuration = $pluginConfiguration;
    }
}