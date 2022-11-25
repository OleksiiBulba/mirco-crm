<?php
declare(strict_types=1);

namespace MicroCRM\Home;

use Micro\Component\DependencyInjection\Container;
use Micro\Framework\Kernel\Plugin\ConfigurableInterface;
use Micro\Framework\Kernel\Plugin\DependencyProviderInterface;
use Micro\Framework\Kernel\Plugin\PluginConfigurationTrait;
use Micro\Plugin\Twig\Plugin\TwigTemplatePluginInterface;
use Micro\Plugin\Twig\TwigFacadeInterface;
use MicroCRM\Common\Twig\TwigTemplatePluginTrait;
use MicroCRM\Home\Facade\HomeFacade;
use MicroCRM\Home\Facade\HomeFacadeInterface;

/**
 * @method HomePluginConfiguration configuration()
 */
class HomePlugin implements DependencyProviderInterface, ConfigurableInterface, TwigTemplatePluginInterface
{
    use PluginConfigurationTrait;
    use TwigTemplatePluginTrait;

    private readonly TwigFacadeInterface $twigFacade;

    /**
     * {@inheritDoc}
     */
    public function provideDependencies(Container $container): void
    {
        $container->register(HomeFacadeInterface::class, function (
            TwigFacadeInterface $twigFacade
        ) {
            $this->twigFacade = $twigFacade;

            return $this->createFacade();
        });
    }

    protected function createFacade(): HomeFacadeInterface
    {
        return new HomeFacade($this->twigFacade, $this->configuration());
    }
}