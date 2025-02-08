<?php

namespace Src\Composite\Concept;

class Client
{
    /** @phpstan-ignore-next-line */
    public function __construct(private readonly Component $component) {}
}
