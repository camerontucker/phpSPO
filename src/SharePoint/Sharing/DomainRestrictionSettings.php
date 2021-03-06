<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\PHP\Client\SharePoint\Sharing;

use Office365\PHP\Client\Runtime\ClientValueObject;
/**
 * Represents 
 * the settings of the restricted domain names 
 * sharing.
 */
class DomainRestrictionSettings extends ClientValueObject
{
    /**
     * Indicates 
     * whether the current restricted domain names for 
     * sending sharing invitation at the organization level is the domain allow list 
     * or deny list.
     * @var integer
     */
    public $domainRestrictionMode;
    /**
     * Indicates 
     * whether the current restricted domain names for 
     * sending sharing invitation at the site collection level is the domain allow 
     * list or deny list.
     * @var integer
     */
    public $domainRestrictionModeAtSite;
    /**
     * Comma 
     * separated list of allowed or denied domain names for 
     * sending sharing invitation at the organization level.
     * @var string
     */
    public $restrictedDomains;
    /**
     * Comma 
     * separated list of allowed or denied domain names for 
     * sending sharing invitation at the site collection level.
     * @var string
     */
    public $restrictedDomainsAtSite;
}