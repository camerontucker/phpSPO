<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\PHP\Client\SharePoint\Sharing;

use Office365\PHP\Client\Runtime\ClientValueObject;
/**
 * Represents 
 * the optional Request Object for 
 * Microsoft.SharePoint.Client.Sharing.SecurableObjectExtensions.GetSharingInformation.
 */
class SharingInformationRequest extends ClientValueObject
{
    /**
     * Supported 
     * Features (For future use by Office Client).
     * @var string
     */
    public $clientSupportedFeatures;
    /**
     * Maximum 
     * number of principals to return.
     * @var integer
     */
    public $maxPrincipalsToReturn;
    /**
     * @var bool
     */
    public $populateInheritedLinks;
}