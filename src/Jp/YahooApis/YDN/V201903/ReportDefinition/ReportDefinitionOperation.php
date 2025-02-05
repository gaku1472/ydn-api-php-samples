<?php

namespace Jp\YahooApis\YDN\V201903\ReportDefinition;

class ReportDefinitionOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var ReportDefinition[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param ReportDefinition[] $operand
     */
    public function __construct($operator, $accountId, array $operand)
    {
      parent::__construct($operator);
      $this->accountId = $accountId;
      $this->operand = $operand;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinitionOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return ReportDefinition[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param ReportDefinition[] $operand
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinitionOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
