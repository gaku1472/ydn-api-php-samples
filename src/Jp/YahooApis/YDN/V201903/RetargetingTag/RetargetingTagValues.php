<?php

namespace Jp\YahooApis\YDN\V201903\RetargetingTag;

class RetargetingTagValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var RetargetingTag $retargetingTag
     */
    protected $retargetingTag = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RetargetingTag
     */
    public function getRetargetingTag()
    {
      return $this->retargetingTag;
    }

    /**
     * @param RetargetingTag $retargetingTag
     * @return \Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagValues
     */
    public function setRetargetingTag($retargetingTag)
    {
      $this->retargetingTag = $retargetingTag;
      return $this;
    }

}
