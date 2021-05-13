<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class DeviceOperatingSystemSummary extends ClientValue
{
    /**
     * @var integer
     */
    public $AndroidCount;
    /**
     * @var integer
     */
    public $IosCount;
    /**
     * @var integer
     */
    public $MacOSCount;
    /**
     * @var integer
     */
    public $WindowsMobileCount;
    /**
     * @var integer
     */
    public $WindowsCount;
    /**
     * @var integer
     */
    public $UnknownCount;
}