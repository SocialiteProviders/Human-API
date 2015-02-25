<?php
namespace SocialiteProviders\HumanApi;

use SocialiteProviders\Manager\SocialiteWasCalled;

class HumanApiExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'humanapi', __NAMESPACE__.'\Provider'
        );
    }
}
