<?php

namespace MicroCRM\Frontend\React\Facade;

use Micro\Plugin\Twig\TwigFacadeInterface;
use MicroCRM\Frontend\React\ReactPluginConfiguration;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

readonly class ReactFacade implements ReactFacadeInterface
{
    /**
     * @param TwigFacadeInterface      $twigFacade
     * @param ReactPluginConfiguration $pluginConfiguration
     */
    public function __construct(
        private TwigFacadeInterface $twigFacade,
        private ReactPluginConfiguration $pluginConfiguration
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function handleHomeRequest(Request $request): Response
    {
        return new Response(
            $this->twigFacade->render('@ReactPlugin/index.html.twig')
        );
    }
}
