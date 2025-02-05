<?php

namespace Jp\YahooApis\YDN\V201903\Media;

class MediaReturnValue extends \Jp\YahooApis\YDN\V201903\ListReturnValue
{

    /**
     * @var MediaValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MediaValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param MediaValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\Media\MediaReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
