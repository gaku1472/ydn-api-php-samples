<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupAdLabel;

class mutate
{

    /**
     * @var AdGroupAdLabelOperation $operations
     */
    protected $operations = null;

    /**
     * @param AdGroupAdLabelOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return AdGroupAdLabelOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param AdGroupAdLabelOperation $operations
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAdLabel\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
