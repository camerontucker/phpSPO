<?php

/**
 * Updated By PHP Office365 Generator 2019-11-16T20:28:28+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint\Publishing;

use Office365\PHP\Client\Runtime\ClientObject;

class Search extends ClientObject
{
    /**
     * @return array
     */
    public function getQueryLanguages()
    {
        if (!$this->isPropertyAvailable("QueryLanguages")) {
            return null;
        }
        return $this->getProperty("QueryLanguages");
    }
    /**
     * @var array
     */
    public function setQueryLanguages($value)
    {
        $this->setProperty("QueryLanguages", $value, true);
    }
}