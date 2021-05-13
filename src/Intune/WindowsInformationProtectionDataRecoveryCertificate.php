<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class WindowsInformationProtectionDataRecoveryCertificate extends ClientValue
{
    /**
     * @var string
     */
    public $SubjectName;
    /**
     * @var string
     */
    public $Description;
    /**
     * @var string
     */
    public $Certificate;
}