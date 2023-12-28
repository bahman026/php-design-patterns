<?php

namespace Src\Builder\RequestBuilder;

class RequestBuilder
{
    private $uri;
    private $data;
    private $method;
    private $headers;
    private $agent;

    public static function forge(): RequestBuilder
    {
        return new RequestBuilder();
    }

    public function withUri(string $uri): RequestBuilder
    {
        $this->uri = $uri;
        return $this;
    }

    public function withData(array $data): RequestBuilder
    {
        $this->data = $data;
        return $this;
    }

    public function withHeaders(array $headers): RequestBuilder
    {
        $this->headers = $headers;
        return $this;
    }

    public function withAgent(string $agent): RequestBuilder
    {
        $this->agent = $agent;
        return $this;
    }

    public function withMethod(string $method): RequestBuilder
    {
        $this->method = $method;
        return $this;
    }

    public function build(): Request
    {
        return new Request($this);
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }
}
