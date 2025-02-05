<?php

namespace Jp\YahooApis\YDN\V201903\Campaign;

class Label
{

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @var string $labelName
     */
    protected $labelName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $color
     */
    protected $color = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getLabelId()
    {
      return $this->labelId;
    }

    /**
     * @param int $labelId
     * @return \Jp\YahooApis\YDN\V201903\Campaign\Label
     */
    public function setLabelId($labelId)
    {
      $this->labelId = $labelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelName()
    {
      return $this->labelName;
    }

    /**
     * @param string $labelName
     * @return \Jp\YahooApis\YDN\V201903\Campaign\Label
     */
    public function setLabelName($labelName)
    {
      $this->labelName = $labelName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Jp\YahooApis\YDN\V201903\Campaign\Label
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
      return $this->color;
    }

    /**
     * @param string $color
     * @return \Jp\YahooApis\YDN\V201903\Campaign\Label
     */
    public function setColor($color)
    {
      $this->color = $color;
      return $this;
    }

}
