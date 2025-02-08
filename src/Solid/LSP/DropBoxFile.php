<?php

namespace Src\Solid\LSP;

class DropBoxFile implements DownloadableFileInterface, EncodeableFileInterface, FileInterface
{
    public function rename(): bool
    {
        // TODO: Implement rename() method.
        return true;
    }

    public function move(): bool
    {
        // TODO: Implement move() method.
        return true;
    }

    public function copy(): bool
    {
        // TODO: Implement copy() method.
        return true;
    }

    public function download(): bool
    {
        // TODO: Implement download() method.
        return true;
    }
}
