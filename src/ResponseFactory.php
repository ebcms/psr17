<?php declare (strict_types = 1);

namespace Ebcms;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

class ResponseFactory implements ResponseFactoryInterface
{

    /**
     * @inheritDoc
     */
    public function createResponse(int $code = 200, string $reasonPhrase = ''): ResponseInterface
    {
        return new Response($code, [], null, '1.1', $reasonPhrase);
    }

    public function createGeneralResponse(int $code = 200, array $headers = [], string $body = null): ResponseInterface
    {
        return new Response($code, $headers, $body);
    }
}
