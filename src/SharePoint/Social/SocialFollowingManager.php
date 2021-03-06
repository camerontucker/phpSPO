<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint\Social;

use Office365\PHP\Client\Runtime\ClientObject;
use Office365\PHP\Client\Runtime\DeleteEntityQuery;
use Office365\PHP\Client\Runtime\ResourcePathEntity;
use Office365\PHP\Client\Runtime\UpdateEntityQuery;

class SocialFollowingManager extends ClientObject
{
    /**
     * @return string
     */
    public function getFollowedDocumentsUri()
    {
        if (!$this->isPropertyAvailable("FollowedDocumentsUri")) {
            return null;
        }
        return $this->getProperty("FollowedDocumentsUri");
    }
    /**
     * @var string
     */
    public function setFollowedDocumentsUri($value)
    {
        $this->setProperty("FollowedDocumentsUri", $value, true);
    }
    /**
     * @return string
     */
    public function getFollowedSitesUri()
    {
        if (!$this->isPropertyAvailable("FollowedSitesUri")) {
            return null;
        }
        return $this->getProperty("FollowedSitesUri");
    }
    /**
     * @var string
     */
    public function setFollowedSitesUri($value)
    {
        $this->setProperty("FollowedSitesUri", $value, true);
    }
}
