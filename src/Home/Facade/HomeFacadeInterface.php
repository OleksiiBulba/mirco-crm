<?php

namespace MicroCRM\Home\Facade;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface HomeFacadeInterface
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function handleHomeRequest(Request $request): Response;
}