<?php

namespace MicroCRM\Home\Controller;

use MicroCRM\Home\Facade\HomeFacadeInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @param HomeFacadeInterface $homeFacade
     */
    public function __construct(
        private readonly HomeFacadeInterface $homeFacade
    )
    {
    }

    public function index(Request $request): Response
    {
        return $this->homeFacade->handleHomeRequest($request);
    }
}