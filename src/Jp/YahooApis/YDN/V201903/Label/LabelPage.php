<?php

namespace Jp\YahooApis\YDN\V201903\Label;

class LabelPage extends \Jp\YahooApis\YDN\V201903\Page
{

    /**
     * @var LabelValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LabelValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param LabelValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\Label\LabelPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
