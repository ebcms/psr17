# psr17

php psr17

## Installation

``` cmd
composer require ebcms/psr17
```

## Usage

``` php
$request_factory = new \Ebcms\RequestFactory;
$request = $request_factory->createRequest(string $method, $uri);

$response_factory = new \Ebcms\ResponseFactory;
$response = $response_factory->createResponse(int $code = 200, string $reasonPhrase = '');
$response = $response_factory->createGeneralResponse(int $code = 200, array $headers = [], string $body = null);

$server_request_factory = new \Ebcms\ServerRequestFactory;
$server_request = $server_request_factory->createServerRequest(string $method, $uri, array $serverParams = []);

$stream_factory = new \Ebcms\StreamFactory;
$stream = $stream_factory->createStream(string $content = '');
$stream = $stream_factory->createStreamFromFile(string $file, string $mode = 'r');
$stream = $stream_factory->createStreamFromResource($resource);

$uploaded_file_factory = new \Ebcms\UploadedFileFactory;
$upload_file = $uploaded_file_factory->createUploadedFile(StreamInterface $stream,int $size = null,int $error = \UPLOAD_ERR_OK,string $clientFilename = null,string $clientMediaType = null);

$uri_factory = new \Ebcms\UriFactory;
$uri = $uri_factory->createUri(string $uri = '');
```
