<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class DisapprovalReasonValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var DisapprovalReason $disapprovalReason
     */
    protected $disapprovalReason = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DisapprovalReason
     */
    public function getDisapprovalReason()
    {
      return $this->disapprovalReason;
    }

    /**
     * @param DisapprovalReason $disapprovalReason
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\DisapprovalReasonValues
     */
    public function setDisapprovalReason($disapprovalReason)
    {
      $this->disapprovalReason = $disapprovalReason;
      return $this;
    }

}
