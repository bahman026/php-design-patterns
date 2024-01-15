<?php

namespace Src\Adapter\Tasks;

enum TaskStatus: int
{
    case INIT = 0;
    case DONE = 2;
    case DOING = 1;
}
