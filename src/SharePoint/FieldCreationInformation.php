<?php

/**
 * Updated By PHP Office365 Generator 2019-10-05T21:24:24+00:00 
*/
namespace Office365\PHP\Client\SharePoint;

use Office365\PHP\Client\Runtime\ClientValueObject;
/**
 * Represents properties that can be set when creating a field.
 */
class FieldCreationInformation extends ClientValueObject
{
    public function __construct()
    {
        parent::__construct("Field");
    }
    /**
     * @var bool
     */
    public $CanBeDeleted;
    /**
     * @var string
     */
    public $DefaultValue;
    /**
     * @var string
     */
    public $Title;
    /**
     * @var string
     */
    public $Description;
    /**
     * @var int
     */
    public $FieldTypeKind;
    public $Choices;
    public $IsCompactName;
    public $LookupFieldName;
    public $LookupListId;
    public $LookupWebId;
    public $Required;
}