<?php

namespace Src\FactoryMethod\Logger;

class LogMessage
{

    private $content;

    /**
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }





}
