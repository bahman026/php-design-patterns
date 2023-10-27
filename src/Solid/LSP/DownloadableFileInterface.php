<?php

namespace Src\Solid\LSP;

interface DownloadableFileInterface
{
    public function download(): bool;
}
