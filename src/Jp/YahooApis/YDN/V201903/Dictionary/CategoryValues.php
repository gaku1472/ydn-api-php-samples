<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class CategoryValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var Category $category
     */
    protected $category = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param Category $category
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\CategoryValues
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

}
