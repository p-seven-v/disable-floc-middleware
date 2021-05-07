<?php

declare(strict_types=1);

namespace P7v\DisableFloc;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class DisableFlocMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $handler->handle($request);

        if ($response->hasHeader('Permissions-Policy')) {
            return $response;
        }

        return $response->withHeader('Permissions-Policy', 'interest-cohort=()');
    }
}
