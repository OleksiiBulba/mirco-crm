<?php

namespace MicroCRM\Home;

use Micro\Component\DependencyInjection\Container;
use Micro\Framework\Kernel\Plugin\DependencyProviderInterface;
use MicroCRM\Home\Facade\HomeFacade;
use MicroCRM\Home\Facade\HomeFacadeInterface;

class HomePlugin implements DependencyProviderInterface
{
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
        return new HomeFacade();
    }
}