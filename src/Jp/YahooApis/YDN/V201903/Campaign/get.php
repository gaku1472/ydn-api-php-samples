<?php

namespace Jp\YahooApis\YDN\V201903\Campaign;

class get
{

    /**
     * @var CampaignSelector $selector
     */
    protected $selector = null;

    /**
     * @param CampaignSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return CampaignSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param CampaignSelector $selector
     * @return \Jp\YahooApis\YDN\V201903\Campaign\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
