<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class DisapprovalReasonPage extends \Jp\YahooApis\YDN\V201903\Page
{

    /**
     * @var DisapprovalReasonValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DisapprovalReasonValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param DisapprovalReasonValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\DisapprovalReasonPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
