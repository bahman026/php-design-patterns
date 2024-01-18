<?php

namespace Src\Bridge\CampaignManager\Promotion;

use Src\Bridge\CampaignManager\Promotion;

class PopupPromotion implements Promotion
{
    public function __construct(
        private readonly string $bannerUrl,
        private readonly string $url,
    ) {
    }

    public function display(): string
    {
        return <<<POPUP
            <div class="popup">
                <a href="{$this->url}">
                    <img src="{$this->bannerUrl}">
                </a>
            </div>
        POPUP;
    }
}
