<?php

namespace Src\Bridge\CampaignManager\Campaigns;

use Src\Bridge\CampaignManager\Campaign;

class PPCCampaign extends Campaign
{
    public function run(): void
    {
        $this->promotion->display();
        // TODO: Implement run() method.
    }
}
