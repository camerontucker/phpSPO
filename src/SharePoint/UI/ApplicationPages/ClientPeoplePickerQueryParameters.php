<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T20:07:30+00:00 16.0.19402.12016
 */
namespace Office365\PHP\Client\SharePoint\UI\ApplicationPages;

use Office365\PHP\Client\Runtime\ClientValueObject;

class ClientPeoplePickerQueryParameters extends ClientValueObject
{
    /**
     * @var bool
     */
    public $AllowEmailAddresses;
    /**
     * @var bool
     */
    public $AllowMultipleEntities;
    /**
     * @var bool
     */
    public $AllowOnlyEmailAddresses;
    /**
     * @var bool
     */
    public $AllUrlZones;
    /**
     * @var string
     */
    public $EnabledClaimProviders;
    /**
     * @var bool
     */
    public $ForceClaims;
    /**
     * @var integer
     */
    public $MaximumEntitySuggestions;
    /**
     * @var integer
     */
    public $PrincipalSource;
    /**
     * @var integer
     */
    public $PrincipalType;
    
    public $QuerySettings;
    /**
     * @var string
     */
    public $QueryString;
    /**
     * @var bool
     */
    public $Required;
    /**
     * @var integer
     */
    public $SharePointGroupID;
    /**
     * @var integer
     */
    public $UrlZone;
    /**
     * @var bool
     */
    public $UrlZoneSpecified;
    /**
     * @var string
     */
    public $WebApplicationID;
}