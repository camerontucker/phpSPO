<?php

/**
 * Updated By PHP Office365 Generator 2019-11-16T20:28:28+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint\Publishing;

use Office365\PHP\Client\Runtime\ClientObject;

class VideoThumbnail extends ClientObject
{
    /**
     * @return integer
     */
    public function getChoice()
    {
        if (!$this->isPropertyAvailable("Choice")) {
            return null;
        }
        return $this->getProperty("Choice");
    }
    /**
     * @var integer
     */
    public function setChoice($value)
    {
        $this->setProperty("Choice", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsSelected()
    {
        if (!$this->isPropertyAvailable("IsSelected")) {
            return null;
        }
        return $this->getProperty("IsSelected");
    }
    /**
     * @var bool
     */
    public function setIsSelected($value)
    {
        $this->setProperty("IsSelected", $value, true);
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
}