<?php

namespace Jp\YahooApis\YDN\V201903\Account;

class AccountSelector
{

    /**
     * @var long[] $accountIds
     */
    protected $accountIds = null;

    /**
     * @var AccountType[] $accountTypes
     */
    protected $accountTypes = null;

    /**
     * @var AccountStatus[] $accountStatuses
     */
    protected $accountStatuses = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Paging $paging
     */
    protected $paging = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return long[]
     */
    public function getAccountIds()
    {
      return $this->accountIds;
    }

    /**
     * @param long[] $accountIds
     * @return \Jp\YahooApis\YDN\V201903\Account\AccountSelector
     */
    public function setAccountIds(array $accountIds = null)
    {
      $this->accountIds = $accountIds;
      return $this;
    }

    /**
     * @return AccountType[]
     */
    public function getAccountTypes()
    {
      return $this->accountTypes;
    }

    /**
     * @param AccountType[] $accountTypes
     * @return \Jp\YahooApis\YDN\V201903\Account\AccountSelector
     */
    public function setAccountTypes(array $accountTypes = null)
    {
      $this->accountTypes = $accountTypes;
      return $this;
    }

    /**
     * @return AccountStatus[]
     */
    public function getAccountStatuses()
    {
      return $this->accountStatuses;
    }

    /**
     * @param AccountStatus[] $accountStatuses
     * @return \Jp\YahooApis\YDN\V201903\Account\AccountSelector
     */
    public function setAccountStatuses(array $accountStatuses = null)
    {
      $this->accountStatuses = $accountStatuses;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201903\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201903\Paging $paging
     * @return \Jp\YahooApis\YDN\V201903\Account\AccountSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
