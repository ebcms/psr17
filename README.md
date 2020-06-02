# psr17

php psr17

## Installation

``` cmd
composer require ebcms/psr17
```

## Usage

``` php
$http_factory = new \Ebcms\Psr17;

$request = $http_factory->createRequest(string $method, $uri);

$response = $http_factory->createResponse(int $code = 200, string $reasonPhrase = '');

$response = $http_factory->createGeneralResponse(int $code = 200, array $headers = [], string $body = null);

$server_request = $http_factory->createServerRequest(string $method, $uri, array $serverParams = []);

$stream = $http_factory->createStream(string $content = '');

$stream = $http_factory->createStreamFromFile(string $file, string $mode = 'r');

$stream = $http_factory->createStreamFromResource($resource);

$upload_file = $http_factory->createUploadedFile(StreamInterface $stream,int $size = null,int $error = \UPLOAD_ERR_OK,string $clientFilename = null,string $clientMediaType = null);

$uri = $http_factory->createUri(string $uri = '');
```
