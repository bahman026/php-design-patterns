<?php

namespace Src\Solid\LSP;

use Faker\Core\File;

class DropBoxFile implements DownloadableFileInterface, FileInterface, EncodeableFileInterface
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
