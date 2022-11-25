<?php

namespace MicroCRM\Home\Facade;

use Micro\Plugin\Twig\TwigFacadeInterface;
use MicroCRM\Home\HomePluginConfiguration;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeFacade implements HomeFacadeInterface
{
    /**
     * @param TwigFacadeInterface $twigFacade
     * @param HomePluginConfiguration $pluginConfiguration
     */
    public function __construct(
        private readonly TwigFacadeInterface $twigFacade,
        private readonly HomePluginConfiguration $pluginConfiguration
    )
    {
    }

    /**
     * {@inheritDoc}
     */
    public function handleHomeRequest(Request $request): Response
    {
        $result = $this->twigFacade->render('@HomePlugin/index.html.twig', [
            'items' => [
                'Message1',
                'Message2'
            ]
        ]);

        return new Response($result);
    }
}