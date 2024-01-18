<?php

namespace Src\Bridge\CampaignManager\Promotion;

use Src\Bridge\CampaignManager\Promotion;

class VideoPromotion implements Promotion
{
    public function __construct(
        private readonly string $title,
        private readonly string $videoUrl,
    ) {
    }

    public function display(): string
    {
        return <<<VIDEO
            <h1>{$this->title}</h1>
            <video>
                <source src="{$this->videoUrl}">
            </video>
            VIDEO;
    }
}
