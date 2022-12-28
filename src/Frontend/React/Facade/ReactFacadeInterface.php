<?php

namespace MicroCRM\Frontend\React\Facade;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface ReactFacadeInterface
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function handleHomeRequest(Request $request): Response;
}
