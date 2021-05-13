<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class DeviceCompliancePolicySettingState extends ClientValue
{
    /**
     * @var string
     */
    public $Setting;
    /**
     * @var string
     */
    public $SettingName;
    /**
     * @var string
     */
    public $InstanceDisplayName;
    /**
     * @var integer
     */
    public $ErrorCode;
    /**
     * @var string
     */
    public $ErrorDescription;
    /**
     * @var string
     */
    public $UserId;
    /**
     * @var string
     */
    public $UserName;
    /**
     * @var string
     */
    public $UserEmail;
    /**
     * @var string
     */
    public $UserPrincipalName;
    /**
     * @var string
     */
    public $CurrentValue;
}