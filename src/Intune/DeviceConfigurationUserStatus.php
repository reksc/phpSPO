<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Entity;

class DeviceConfigurationUserStatus extends Entity
{
    /**
     * @return string
     */
    public function getUserDisplayName()
    {
        if (!$this->isPropertyAvailable("UserDisplayName")) {
            return null;
        }
        return $this->getProperty("UserDisplayName");
    }
    /**
     * @var string
     */
    public function setUserDisplayName($value)
    {
        $this->setProperty("UserDisplayName", $value, true);
    }
    /**
     * @return integer
     */
    public function getDevicesCount()
    {
        if (!$this->isPropertyAvailable("DevicesCount")) {
            return null;
        }
        return $this->getProperty("DevicesCount");
    }
    /**
     * @var integer
     */
    public function setDevicesCount($value)
    {
        $this->setProperty("DevicesCount", $value, true);
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