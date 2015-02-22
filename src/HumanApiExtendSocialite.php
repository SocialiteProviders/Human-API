<?php
namespace SocialiteProviders\HumanApi;

use SocialiteProviders\Manager\SocialiteWasCalled;

class HumanApiExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('humanapi', __NAMESPACE__.'\Provider');
    }
}
