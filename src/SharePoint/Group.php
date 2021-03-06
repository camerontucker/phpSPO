<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T14:35:07+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint;

use Office365\PHP\Client\Runtime\ResourcePathEntity;
/**
 * Represents 
 * a collection of users. The CanCurrentUserEditMembership, CanCurrentUserManageGroup 
 * and CanCurrentUserViewMembership properties are not included in the default 
 * scalar property set for this type.
 */
class Group extends Principal
{
    /**
     * Gets a collection of user objects that represents all of the users in the group.
     * @return UserCollection
     */
    public function getUsers()
    {
        if (!$this->isPropertyAvailable('Users')) {
            $this->setProperty("Users", new UserCollection($this->getContext(), new ResourcePathEntity($this->getContext(), $this->getResourcePath(), "Users")));
        }
        return $this->getProperty("Users");
    }
    /**
     * Specifies 
     * whether a member of the group 
     * can add and remove members from the group.
     * @return bool
     */
    public function getAllowMembersEditMembership()
    {
        if (!$this->isPropertyAvailable("AllowMembersEditMembership")) {
            return null;
        }
        return $this->getProperty("AllowMembersEditMembership");
    }
    /**
     * Specifies 
     * whether a member of the group 
     * can add and remove members from the group.
     * @var bool
     */
    public function setAllowMembersEditMembership($value)
    {
        $this->setProperty("AllowMembersEditMembership", $value, true);
    }
    /**
     * Specifies 
     * whether to allow users to request to join or leave in the group. 
     * 
     * @return bool
     */
    public function getAllowRequestToJoinLeave()
    {
        if (!$this->isPropertyAvailable("AllowRequestToJoinLeave")) {
            return null;
        }
        return $this->getProperty("AllowRequestToJoinLeave");
    }
    /**
     * Specifies 
     * whether to allow users to request to join or leave in the group. 
     * 
     * @var bool
     */
    public function setAllowRequestToJoinLeave($value)
    {
        $this->setProperty("AllowRequestToJoinLeave", $value, true);
    }
    /**
     * Specifies 
     * whether requests to join or leave the group are 
     * automatically accepted.
     * @return bool
     */
    public function getAutoAcceptRequestToJoinLeave()
    {
        if (!$this->isPropertyAvailable("AutoAcceptRequestToJoinLeave")) {
            return null;
        }
        return $this->getProperty("AutoAcceptRequestToJoinLeave");
    }
    /**
     * Specifies 
     * whether requests to join or leave the group are 
     * automatically accepted.
     * @var bool
     */
    public function setAutoAcceptRequestToJoinLeave($value)
    {
        $this->setProperty("AutoAcceptRequestToJoinLeave", $value, true);
    }
    /**
     * Specifies 
     * whether the current user can add 
     * and remove members from the group.
     * @return bool
     */
    public function getCanCurrentUserEditMembership()
    {
        if (!$this->isPropertyAvailable("CanCurrentUserEditMembership")) {
            return null;
        }
        return $this->getProperty("CanCurrentUserEditMembership");
    }
    /**
     * Specifies 
     * whether the current user can add 
     * and remove members from the group.
     * @var bool
     */
    public function setCanCurrentUserEditMembership($value)
    {
        $this->setProperty("CanCurrentUserEditMembership", $value, true);
    }
    /**
     * Specifies 
     * whether the current user can 
     * change settings on the group.
     * @return bool
     */
    public function getCanCurrentUserManageGroup()
    {
        if (!$this->isPropertyAvailable("CanCurrentUserManageGroup")) {
            return null;
        }
        return $this->getProperty("CanCurrentUserManageGroup");
    }
    /**
     * Specifies 
     * whether the current user can 
     * change settings on the group.
     * @var bool
     */
    public function setCanCurrentUserManageGroup($value)
    {
        $this->setProperty("CanCurrentUserManageGroup", $value, true);
    }
    /**
     * Specifies 
     * whether the current user can 
     * view the membership of the group.
     * @return bool
     */
    public function getCanCurrentUserViewMembership()
    {
        if (!$this->isPropertyAvailable("CanCurrentUserViewMembership")) {
            return null;
        }
        return $this->getProperty("CanCurrentUserViewMembership");
    }
    /**
     * Specifies 
     * whether the current user can 
     * view the membership of the group.
     * @var bool
     */
    public function setCanCurrentUserViewMembership($value)
    {
        $this->setProperty("CanCurrentUserViewMembership", $value, true);
    }
    /**
     * Specifies 
     * the description for the group.
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * Specifies 
     * the description for the group.
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * Specifies 
     * whether viewing the membership of the group 
     * is restricted to members of the 
     * group.
     * @return bool
     */
    public function getOnlyAllowMembersViewMembership()
    {
        if (!$this->isPropertyAvailable("OnlyAllowMembersViewMembership")) {
            return null;
        }
        return $this->getProperty("OnlyAllowMembersViewMembership");
    }
    /**
     * Specifies 
     * whether viewing the membership of the group 
     * is restricted to members of the 
     * group.
     * @var bool
     */
    public function setOnlyAllowMembersViewMembership($value)
    {
        $this->setProperty("OnlyAllowMembersViewMembership", $value, true);
    }
    /**
     * Specifies 
     * the name of the owner of the group.
     * @return string
     */
    public function getOwnerTitle()
    {
        if (!$this->isPropertyAvailable("OwnerTitle")) {
            return null;
        }
        return $this->getProperty("OwnerTitle");
    }
    /**
     * Specifies 
     * the name of the owner of the group.
     * @var string
     */
    public function setOwnerTitle($value)
    {
        $this->setProperty("OwnerTitle", $value, true);
    }
    /**
     * Specifies 
     * the e-mail 
     * address to which requests to join or leave the group 
     * are sent.
     * @return string
     */
    public function getRequestToJoinLeaveEmailSetting()
    {
        if (!$this->isPropertyAvailable("RequestToJoinLeaveEmailSetting")) {
            return null;
        }
        return $this->getProperty("RequestToJoinLeaveEmailSetting");
    }
    /**
     * Specifies 
     * the e-mail 
     * address to which requests to join or leave the group 
     * are sent.
     * @var string
     */
    public function setRequestToJoinLeaveEmailSetting($value)
    {
        $this->setProperty("RequestToJoinLeaveEmailSetting", $value, true);
    }
    /**
     * Specifies 
     * the name of the owner of the group.
     * @return Principal
     */
    public function getOwner()
    {
        if (!$this->isPropertyAvailable("Owner")) {
            $this->setProperty("Owner", new Principal($this->getContext(), new ResourcePathEntity($this->getContext(), $this->getResourcePath(), "Owner")));
        }
        return $this->getProperty("Owner");
    }
}