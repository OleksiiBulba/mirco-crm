<?php

namespace MicroCRM\Home\Facade;

use MicroCRM\Home\HomePluginConfiguration;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeFacade implements HomeFacadeInterface
{
    /**
     * @param HomePluginConfiguration $pluginConfiguration
     */
    public function __construct(private readonly HomePluginConfiguration $pluginConfiguration)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function handleHomeRequest(Request $request): Response
    {
        return new Response('Hello, World ! ENV: ' . $this->pluginConfiguration->getEnv());
    }
}