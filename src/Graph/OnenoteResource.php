<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class OnenoteResource extends ClientObject
{
    /**
     * @return string
     */
    public function getContentUrl()
    {
        if (!$this->isPropertyAvailable("ContentUrl")) {
            return null;
        }
        return $this->getProperty("ContentUrl");
    }
    /**
     * @var string
     */
    public function setContentUrl($value)
    {
        $this->setProperty("ContentUrl", $value, true);
    }
}