<?php

class Domain {
  protected static function getWebsiteName() {
    return "w3school.com";
  }
}

class domainW3 extends Domain {
  public $websiteName;
  public function __construct() 
  {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domain = new domainW3;
echo $domain->websiteName;