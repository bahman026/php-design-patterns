<?php

namespace Src\Solid\LSP;

interface FileInterface
{
    public function rename(): bool;

    public function move(): bool;

    public function copy(): bool;
}
