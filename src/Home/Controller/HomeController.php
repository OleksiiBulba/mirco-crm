<?php

namespace MicroCRM\Home\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index(Request $request): Response
    {
        return new Response('Hello, World!');
    }
}