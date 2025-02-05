<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class GeographicLocationValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var GeographicLocation $geographicLocation
     */
    protected $geographicLocation = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GeographicLocation
     */
    public function getGeographicLocation()
    {
      return $this->geographicLocation;
    }

    /**
     * @param GeographicLocation $geographicLocation
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\GeographicLocationValues
     */
    public function setGeographicLocation($geographicLocation)
    {
      $this->geographicLocation = $geographicLocation;
      return $this;
    }

}
