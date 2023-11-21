<?php

namespace Src\FactoryMethod\Logger;

//this is product
interface Logger
{

    public function log(LogMessage $message);
}
