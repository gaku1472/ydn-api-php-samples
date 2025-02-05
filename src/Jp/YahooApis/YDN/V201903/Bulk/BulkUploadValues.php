<?php

namespace Jp\YahooApis\YDN\V201903\Bulk;

class BulkUploadValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var UploadBulkJob $uploadBulkJob
     */
    protected $uploadBulkJob = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return UploadBulkJob
     */
    public function getUploadBulkJob()
    {
      return $this->uploadBulkJob;
    }

    /**
     * @param UploadBulkJob $uploadBulkJob
     * @return \Jp\YahooApis\YDN\V201903\Bulk\BulkUploadValues
     */
    public function setUploadBulkJob($uploadBulkJob)
    {
      $this->uploadBulkJob = $uploadBulkJob;
      return $this;
    }

}
