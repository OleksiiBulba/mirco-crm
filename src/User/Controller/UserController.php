<?php

declare(strict_types=1);

namespace MicroCRM\User\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function index(Request $request): Response
    {
        $input = json_decode($request->getContent(), true);
        $input['token'] = md5((string) rand());

        return new JsonResponse($input);
    }
}
