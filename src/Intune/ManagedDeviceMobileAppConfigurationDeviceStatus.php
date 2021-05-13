<?php

/**
 * Modified: 2020-05-26T22:07:25+00:00 
 */
namespace Office365\Intune;

use Office365\Entity;
class ManagedDeviceMobileAppConfigurationDeviceStatus extends Entity
{
    /**
     * @return string
     */
    public function getDeviceDisplayName()
    {
        if (!$this->isPropertyAvailable("DeviceDisplayName")) {
            return null;
        }
        return $this->getProperty("DeviceDisplayName");
    }
    /**
     * @var string
     */
    public function setDeviceDisplayName($value)
    {
        $this->setProperty("DeviceDisplayName", $value, true);
    }
    /**
     * @return string
     */
    public function getUserName()
    {
        if (!$this->isPropertyAvailable("UserName")) {
            return null;
        }
        return $this->getProperty("UserName");
    }
    /**
     * @var string
     */
    public function setUserName($value)
    {
        $this->setProperty("UserName", $value, true);
    }
    /**
     * @return string
     */
    public function getDeviceModel()
    {
        if (!$this->isPropertyAvailable("DeviceModel")) {
            return null;
        }
        return $this->getProperty("DeviceModel");
    }
    /**
     * @var string
     */
    public function setDeviceModel($value)
    {
        $this->setProperty("DeviceModel", $value, true);
    }
    /**
     * @return string
     */
    public function getUserPrincipalName()
    {
        if (!$this->isPropertyAvailable("UserPrincipalName")) {
            return null;
        }
        return $this->getProperty("UserPrincipalName");
    }
    /**
     * @var string
     */
    public function setUserPrincipalName($value)
    {
        $this->setProperty("UserPrincipalName", $value, true);
    }
}