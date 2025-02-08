<?php

namespace Src\Builder\RequestBuilder;

class Request
{
    private string $uri;

    private string $data;

    private string $method;

    private string $headers;

    private string $agent;

    public function __construct(RequestBuilder $builder)
    {
        $this->uri = $builder->getUri();
        $this->method = $builder->getMethod();
        $this->data = $builder->getData();
        $this->headers = $builder->getHeaders();
        $this->agent = $builder->getAgent();
    }

    public function run(): void
    {
        $uri = $this->uri;
        $method = $this->method;
        $data = $this->data;
        $headers = $this->headers;
        $agent = $this->agent;
        $request = curl_init($this->uri);
        //        ...
    }
}
