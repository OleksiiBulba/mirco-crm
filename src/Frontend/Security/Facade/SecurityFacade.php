<?php

declare(strict_types=1);

namespace MicroCRM\Frontend\Security\Facade;

use MicroCRM\Frontend\Security\Authenticator\AuthenticatorFactoryInterface;
use MicroCRM\Frontend\Security\Token\Model\AuthTokenInterface;
use Symfony\Component\HttpFoundation\Request;

readonly class SecurityFacade implements SecurityFacadeInterface
{
    private AuthTokenInterface $authToken;

    public function __construct(
        private AuthenticatorFactoryInterface $authenticatorFactory
    ) {
    }

    public function authenticateRequest(Request $request): AuthTokenInterface
    {
        $this->authToken = $this->authenticatorFactory
            ->create()
            ->authenticateRequest($request);

        return $this->authToken;
    }

    public function getAuthToken(): AuthTokenInterface
    {
        return $this->authToken;
    }
}
