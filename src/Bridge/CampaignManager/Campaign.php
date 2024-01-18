<?php

namespace Src\Bridge\CampaignManager;

abstract class Campaign
{
    public function __construct(protected Promotion $promotion)
    {
    }

    public function changePromotion($promotion): void
    {
        $this->promotion = $promotion;
    }


    abstract public function run();
}
