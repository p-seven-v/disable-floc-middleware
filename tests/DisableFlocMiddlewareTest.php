<?php

declare(strict_types=1);

namespace Tests;

use Nyholm\Psr7\Response;
use Nyholm\Psr7\ServerRequest;
use P7v\DisableFloc\DisableFlocMiddleware;
use PHPUnit\Framework\TestCase;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * @covers \P7v\DisableFloc\DisableFlocMiddleware
 */
class DisableFlocMiddlewareTest extends TestCase
{
    private const PERMISSIONS_POLICY_HEADER_NAME = 'Permissions-Policy';

    /** @var DisableFlocMiddleware */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sut = new DisableFlocMiddleware();
    }

    /** @test */
    public function it_does_not_modify_permissions_policy_header(): void
    {
        $serverRequest = new ServerRequest('GET', '/');

        $originalResponse = (new Response())->withHeader(self::PERMISSIONS_POLICY_HEADER_NAME, 'any');

        $requestHandler = $this->createMock(RequestHandlerInterface::class);
        $requestHandler->method('handle')
            ->with($serverRequest)
            ->willReturn($originalResponse);

        $response = $this->sut->process($serverRequest, $requestHandler);

        $permissionsPolicyValues = $response->getHeader(self::PERMISSIONS_POLICY_HEADER_NAME);
        $this->assertEquals(
            'any',
            $permissionsPolicyValues[array_key_first($permissionsPolicyValues)]
        );
    }

    /** @test */
    public function it_adds_proper_permissions_policy_header(): void
    {
        $serverRequest = new ServerRequest('GET', '/');

        $originalResponse = new Response();

        $requestHandler = $this->createMock(RequestHandlerInterface::class);
        $requestHandler->method('handle')
            ->with($serverRequest)
            ->willReturn($originalResponse);

        $response = $this->sut->process($serverRequest, $requestHandler);

        $permissionsPolicyValues = $response->getHeader(self::PERMISSIONS_POLICY_HEADER_NAME);
        $this->assertEquals(
            'interest-cohort=()',
            $permissionsPolicyValues[array_key_first($permissionsPolicyValues)]
        );
    }
}
