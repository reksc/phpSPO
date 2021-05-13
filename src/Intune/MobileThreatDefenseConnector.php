<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;

class MobileThreatDefenseConnector extends ClientObject
{
    /**
     * @return bool
     */
    public function getAndroidEnabled()
    {
        if (!$this->isPropertyAvailable("AndroidEnabled")) {
            return null;
        }
        return $this->getProperty("AndroidEnabled");
    }
    /**
     * @var bool
     */
    public function setAndroidEnabled($value)
    {
        $this->setProperty("AndroidEnabled", $value, true);
    }
    /**
     * @return bool
     */
    public function getIosEnabled()
    {
        if (!$this->isPropertyAvailable("IosEnabled")) {
            return null;
        }
        return $this->getProperty("IosEnabled");
    }
    /**
     * @var bool
     */
    public function setIosEnabled($value)
    {
        $this->setProperty("IosEnabled", $value, true);
    }
    /**
     * @return bool
     */
    public function getAndroidDeviceBlockedOnMissingPartnerData()
    {
        if (!$this->isPropertyAvailable("AndroidDeviceBlockedOnMissingPartnerData")) {
            return null;
        }
        return $this->getProperty("AndroidDeviceBlockedOnMissingPartnerData");
    }
    /**
     * @var bool
     */
    public function setAndroidDeviceBlockedOnMissingPartnerData($value)
    {
        $this->setProperty("AndroidDeviceBlockedOnMissingPartnerData", $value, true);
    }
    /**
     * @return bool
     */
    public function getIosDeviceBlockedOnMissingPartnerData()
    {
        if (!$this->isPropertyAvailable("IosDeviceBlockedOnMissingPartnerData")) {
            return null;
        }
        return $this->getProperty("IosDeviceBlockedOnMissingPartnerData");
    }
    /**
     * @var bool
     */
    public function setIosDeviceBlockedOnMissingPartnerData($value)
    {
        $this->setProperty("IosDeviceBlockedOnMissingPartnerData", $value, true);
    }
    /**
     * @return bool
     */
    public function getPartnerUnsupportedOsVersionBlocked()
    {
        if (!$this->isPropertyAvailable("PartnerUnsupportedOsVersionBlocked")) {
            return null;
        }
        return $this->getProperty("PartnerUnsupportedOsVersionBlocked");
    }
    /**
     * @var bool
     */
    public function setPartnerUnsupportedOsVersionBlocked($value)
    {
        $this->setProperty("PartnerUnsupportedOsVersionBlocked", $value, true);
    }
    /**
     * @return integer
     */
    public function getPartnerUnresponsivenessThresholdInDays()
    {
        if (!$this->isPropertyAvailable("PartnerUnresponsivenessThresholdInDays")) {
            return null;
        }
        return $this->getProperty("PartnerUnresponsivenessThresholdInDays");
    }
    /**
     * @var integer
     */
    public function setPartnerUnresponsivenessThresholdInDays($value)
    {
        $this->setProperty("PartnerUnresponsivenessThresholdInDays", $value, true);
    }
}