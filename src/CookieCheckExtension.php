<?php

namespace BiffBangPow\Extension;

use Broarm\CookieConsent\CookieConsent;
use SilverStripe\Core\Extension;

class CookieCheckExtension extends Extension
{

    /**
     * @return bool
     * @throws \Exception
     */
    public function getAnalyticsCookiesEnabled()
    {
        return CookieConsent::check('Analytics');
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function getMarketingCookiesEnabled()
    {
        return CookieConsent::check('Marketing');
    }
}