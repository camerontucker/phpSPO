<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint;

use Office365\PHP\Client\Runtime\ClientObject;
/**
 * Encapsulates 
 * a URL 
 * and the zone with which it is associated.<172>
 */
class AlternateUrl extends ClientObject
{
    /**
     * @return string
     */
    public function getUri()
    {
        if (!$this->isPropertyAvailable("Uri")) {
            return null;
        }
        return $this->getProperty("Uri");
    }
    /**
     * @var string
     */
    public function setUri($value)
    {
        $this->setProperty("Uri", $value, true);
    }
    /**
     * @return integer
     */
    public function getUrlZone()
    {
        if (!$this->isPropertyAvailable("UrlZone")) {
            return null;
        }
        return $this->getProperty("UrlZone");
    }
    /**
     * @var integer
     */
    public function setUrlZone($value)
    {
        $this->setProperty("UrlZone", $value, true);
    }
}
