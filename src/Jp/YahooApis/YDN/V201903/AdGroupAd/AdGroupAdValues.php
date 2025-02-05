<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupAd;

class AdGroupAdValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var AdGroupAd $adGroupAd
     */
    protected $adGroupAd = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupAd
     */
    public function getAdGroupAd()
    {
      return $this->adGroupAd;
    }

    /**
     * @param AdGroupAd $adGroupAd
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAdValues
     */
    public function setAdGroupAd($adGroupAd)
    {
      $this->adGroupAd = $adGroupAd;
      return $this;
    }

}
