<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class OsVersionValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var OsVersion[] $osVersion
     */
    protected $osVersion = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return OsVersion[]
     */
    public function getOsVersion()
    {
      return $this->osVersion;
    }

    /**
     * @param OsVersion[] $osVersion
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\OsVersionValues
     */
    public function setOsVersion(array $osVersion = null)
    {
      $this->osVersion = $osVersion;
      return $this;
    }

}
