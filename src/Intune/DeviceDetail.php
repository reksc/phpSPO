<?php

/**
 * Modified: 2020-05-24T21:39:44+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class DeviceDetail extends ClientValue
{
    /**
     * @var string
     */
    public $DeviceId;
    /**
     * @var string
     */
    public $DisplayName;
    /**
     * @var string
     */
    public $OperatingSystem;
    /**
     * @var string
     */
    public $Browser;
    /**
     * @var bool
     */
    public $IsCompliant;
    /**
     * @var bool
     */
    public $IsManaged;
    /**
     * @var string
     */
    public $TrustType;
}