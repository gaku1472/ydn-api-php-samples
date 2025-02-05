<?php

namespace Jp\YahooApis\YDN\V201903\Campaign;

class mutate
{

    /**
     * @var CampaignOperation $operations
     */
    protected $operations = null;

    /**
     * @param CampaignOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return CampaignOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param CampaignOperation $operations
     * @return \Jp\YahooApis\YDN\V201903\Campaign\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
