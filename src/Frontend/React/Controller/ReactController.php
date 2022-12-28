<?php

namespace MicroCRM\Frontend\React\Controller;

use MicroCRM\Frontend\React\Facade\ReactFacadeInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

readonly class ReactController
{
    /**
     * @param ReactFacadeInterface $homeFacade
     */
    public function __construct(
        private ReactFacadeInterface $homeFacade
    ) {
    }

    public function index(Request $request): Response
    {
        return $this->homeFacade->handleHomeRequest($request);
    }
}
