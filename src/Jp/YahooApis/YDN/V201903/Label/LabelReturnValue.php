<?php

namespace Jp\YahooApis\YDN\V201903\Label;

class LabelReturnValue extends \Jp\YahooApis\YDN\V201903\ListReturnValue
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
     * @return \Jp\YahooApis\YDN\V201903\Label\LabelReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
