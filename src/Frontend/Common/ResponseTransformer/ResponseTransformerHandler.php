<?php

declare(strict_types=1);

namespace MicroCRM\Frontend\Common\ResponseTransformer;

use Micro\Plugin\Http\Handler\Response\ResponseHandlerContextInterface;
use Micro\Plugin\Http\Handler\Response\ResponseHandlerInterface;
use Symfony\Component\HttpFoundation\Response;

class ResponseTransformerHandler implements ResponseHandlerInterface
{
    public function __construct(SerializerFacadeInterface $serializerFacade)
    {
        $this->serializerFacade = $serializerFacade;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(ResponseHandlerContextInterface $responseHandlerContext): void
    {
        $response = $responseHandlerContext->getResponse();
        if ($response instanceof Response) {
            return;
        }
        $response->setContent($response->getContent() . ' transformed');
    }
}
