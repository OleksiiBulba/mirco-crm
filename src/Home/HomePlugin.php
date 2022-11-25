<?php

namespace MicroCRM\Home;

use Micro\Component\DependencyInjection\Container;
use Micro\Framework\Kernel\Plugin\ConfigurableInterface;
use Micro\Framework\Kernel\Plugin\DependencyProviderInterface;
use Micro\Framework\Kernel\Plugin\PluginConfigurationTrait;
use MicroCRM\Home\Facade\HomeFacade;
use MicroCRM\Home\Facade\HomeFacadeInterface;

/**
 * @method HomePluginConfiguration configuration()
 */
class HomePlugin implements DependencyProviderInterface, ConfigurableInterface
{
    use PluginConfigurationTrait;

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
}