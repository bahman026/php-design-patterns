<?php

namespace Src\Solid\LSP;

class FileService implements FileServiceInterface
{
    public function encode(EncodeableFileInterface $file): bool
    {
        return true;
    }
}
