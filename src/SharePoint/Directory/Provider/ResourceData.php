<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T19:39:07+00:00 16.0.19402.12016
 */
namespace Office365\PHP\Client\SharePoint\Directory\Provider;

use Office365\PHP\Client\Runtime\ClientValueObject;

class ResourceData extends ClientValueObject
{
    /**
     * @var integer
     */
    public $ErrorCode;
    /**
     * @var string
     */
    public $ErrorMessage;
    /**
     * @var integer
     */
    public $ResourceAction;
    /**
     * @var integer
     */
    public $State;
    /**
     * @var string
     */
    public $Value;
}