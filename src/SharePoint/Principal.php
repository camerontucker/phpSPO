<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T14:25:04+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint;

use Office365\PHP\Client\Runtime\ClientObject;
/**
 * Specifies 
 * a base type that represents a user or group that can be 
 * assigned permissions to control security.
 */
class Principal extends ClientObject
{
    /**
     * @return PrincipalType
     */
    public function getPrincipalType()
    {
        if ($this->isPropertyAvailable('PrincipalType')) {
            return $this->getProperty("PrincipalType");
        }
        return null;
    }
    /**
     * Specifies 
     * the member 
     * identifier for the user or group.Its value 
     * MUST be equal to or greater than 1. Its value MUST be equal to or less than 
     * 2147483647. 
     * @return integer
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * Specifies 
     * the member 
     * identifier for the user or group.Its value 
     * MUST be equal to or greater than 1. Its value MUST be equal to or less than 
     * 2147483647. 
     * @var integer
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * Specifies 
     * whether the principal is hidden 
     * in the user interface (UI).<77>
     * @return bool
     */
    public function getIsHiddenInUI()
    {
        if (!$this->isPropertyAvailable("IsHiddenInUI")) {
            return null;
        }
        return $this->getProperty("IsHiddenInUI");
    }
    /**
     * Specifies 
     * whether the principal is hidden 
     * in the user interface (UI).<77>
     * @var bool
     */
    public function setIsHiddenInUI($value)
    {
        $this->setProperty("IsHiddenInUI", $value, true);
    }
    /**
     * If this object 
     * (1) represents a user, LoginName specifies the login 
     * name of the user. For a group, it specifies 
     * the name of the group.
     * @return string
     */
    public function getLoginName()
    {
        if (!$this->isPropertyAvailable("LoginName")) {
            return null;
        }
        return $this->getProperty("LoginName");
    }
    /**
     * If this object 
     * (1) represents a user, LoginName specifies the login 
     * name of the user. For a group, it specifies 
     * the name of the group.
     * @var string
     */
    public function setLoginName($value)
    {
        $this->setProperty("LoginName", $value, true);
    }
    /**
     * Specifies 
     * the name of the principal.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 255. 
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * Specifies 
     * the name of the principal.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 255. 
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Specifies 
     * the type of principal 
     * represented by this object (1).
     * @var integer
     */
    public function setPrincipalType($value)
    {
        $this->setProperty("PrincipalType", $value, true);
    }
}