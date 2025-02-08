<?php

namespace Src\Bridge\CampaignManager\Promotion;

use Src\Bridge\CampaignManager\Promotion;

class BannerPromotion implements Promotion
{
    public function __construct(
        private readonly string $title,
        private readonly string $url,
        private readonly string $bannerUrl,
    ) {}

    public function display(): string
    {
        return
            <<<BANNER
        <a title="{$this->title}" href="{$this->url}">
        <img src="{$this->bannerUrl}" alt="{$this->title}">
        </a>
        BANNER;
    }
}
