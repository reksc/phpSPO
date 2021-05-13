<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Entity;

class DeviceComplianceSettingState extends Entity
{
    /**
     * @return string
     */
    public function getSetting()
    {
        if (!$this->isPropertyAvailable("Setting")) {
            return null;
        }
        return $this->getProperty("Setting");
    }
    /**
     * @var string
     */
    public function setSetting($value)
    {
        $this->setProperty("Setting", $value, true);
    }
    /**
     * @return string
     */
    public function getSettingName()
    {
        if (!$this->isPropertyAvailable("SettingName")) {
            return null;
        }
        return $this->getProperty("SettingName");
    }
    /**
     * @var string
     */
    public function setSettingName($value)
    {
        $this->setProperty("SettingName", $value, true);
    }
    /**
     * @return string
     */
    public function getDeviceId()
    {
        if (!$this->isPropertyAvailable("DeviceId")) {
            return null;
        }
        return $this->getProperty("DeviceId");
    }
    /**
     * @var string
     */
    public function setDeviceId($value)
    {
        $this->setProperty("DeviceId", $value, true);
    }
    /**
     * @return string
     */
    public function getDeviceName()
    {
        if (!$this->isPropertyAvailable("DeviceName")) {
            return null;
        }
        return $this->getProperty("DeviceName");
    }
    /**
     * @var string
     */
    public function setDeviceName($value)
    {
        $this->setProperty("DeviceName", $value, true);
    }
    /**
     * @return string
     */
    public function getUserId()
    {
        if (!$this->isPropertyAvailable("UserId")) {
            return null;
        }
        return $this->getProperty("UserId");
    }
    /**
     * @var string
     */
    public function setUserId($value)
    {
        $this->setProperty("UserId", $value, true);
    }
    /**
     * @return string
     */
    public function getUserEmail()
    {
        if (!$this->isPropertyAvailable("UserEmail")) {
            return null;
        }
        return $this->getProperty("UserEmail");
    }
    /**
     * @var string
     */
    public function setUserEmail($value)
    {
        $this->setProperty("UserEmail", $value, true);
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
}