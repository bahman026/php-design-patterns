<?php

namespace Src\Composite\ProjectManagement;

interface ProjectComponent
{
    public function done(): mixed;

    public function duplicate(): mixed;

    public function delete(): mixed;

    public function move(): mixed;
}
