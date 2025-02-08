<?php

namespace Src\Bridge\CampaignManager\Promotion;

class TextPromotion
{
    public function __construct(
        private readonly string $title,
        private readonly string $url,
    ) {}

    public function display(): string
    {
        return <<<TEXT
            <a title="{$this->title} href="{$this->url}>
               <span>{$this->title}</span>
            </a>
        TEXT;
    }
}
