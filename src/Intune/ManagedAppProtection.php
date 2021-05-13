<?php

/**
 * Modified: 2020-05-26T22:07:25+00:00
 */
namespace Office365\Intune;

use Office365\Entity;
class ManagedAppProtection extends Entity
{
    /**
     * @return bool
     */
    public function getOrganizationalCredentialsRequired()
    {
        if (!$this->isPropertyAvailable("OrganizationalCredentialsRequired")) {
            return null;
        }
        return $this->getProperty("OrganizationalCredentialsRequired");
    }
    /**
     * @var bool
     */
    public function setOrganizationalCredentialsRequired($value)
    {
        $this->setProperty("OrganizationalCredentialsRequired", $value, true);
    }
    /**
     * @return bool
     */
    public function getDataBackupBlocked()
    {
        if (!$this->isPropertyAvailable("DataBackupBlocked")) {
            return null;
        }
        return $this->getProperty("DataBackupBlocked");
    }
    /**
     * @var bool
     */
    public function setDataBackupBlocked($value)
    {
        $this->setProperty("DataBackupBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getDeviceComplianceRequired()
    {
        if (!$this->isPropertyAvailable("DeviceComplianceRequired")) {
            return null;
        }
        return $this->getProperty("DeviceComplianceRequired");
    }
    /**
     * @var bool
     */
    public function setDeviceComplianceRequired($value)
    {
        $this->setProperty("DeviceComplianceRequired", $value, true);
    }
    /**
     * @return bool
     */
    public function getManagedBrowserToOpenLinksRequired()
    {
        if (!$this->isPropertyAvailable("ManagedBrowserToOpenLinksRequired")) {
            return null;
        }
        return $this->getProperty("ManagedBrowserToOpenLinksRequired");
    }
    /**
     * @var bool
     */
    public function setManagedBrowserToOpenLinksRequired($value)
    {
        $this->setProperty("ManagedBrowserToOpenLinksRequired", $value, true);
    }
    /**
     * @return bool
     */
    public function getSaveAsBlocked()
    {
        if (!$this->isPropertyAvailable("SaveAsBlocked")) {
            return null;
        }
        return $this->getProperty("SaveAsBlocked");
    }
    /**
     * @var bool
     */
    public function setSaveAsBlocked($value)
    {
        $this->setProperty("SaveAsBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getPinRequired()
    {
        if (!$this->isPropertyAvailable("PinRequired")) {
            return null;
        }
        return $this->getProperty("PinRequired");
    }
    /**
     * @var bool
     */
    public function setPinRequired($value)
    {
        $this->setProperty("PinRequired", $value, true);
    }
    /**
     * @return integer
     */
    public function getMaximumPinRetries()
    {
        if (!$this->isPropertyAvailable("MaximumPinRetries")) {
            return null;
        }
        return $this->getProperty("MaximumPinRetries");
    }
    /**
     * @var integer
     */
    public function setMaximumPinRetries($value)
    {
        $this->setProperty("MaximumPinRetries", $value, true);
    }
    /**
     * @return bool
     */
    public function getSimplePinBlocked()
    {
        if (!$this->isPropertyAvailable("SimplePinBlocked")) {
            return null;
        }
        return $this->getProperty("SimplePinBlocked");
    }
    /**
     * @var bool
     */
    public function setSimplePinBlocked($value)
    {
        $this->setProperty("SimplePinBlocked", $value, true);
    }
    /**
     * @return integer
     */
    public function getMinimumPinLength()
    {
        if (!$this->isPropertyAvailable("MinimumPinLength")) {
            return null;
        }
        return $this->getProperty("MinimumPinLength");
    }
    /**
     * @var integer
     */
    public function setMinimumPinLength($value)
    {
        $this->setProperty("MinimumPinLength", $value, true);
    }
    /**
     * @return bool
     */
    public function getContactSyncBlocked()
    {
        if (!$this->isPropertyAvailable("ContactSyncBlocked")) {
            return null;
        }
        return $this->getProperty("ContactSyncBlocked");
    }
    /**
     * @var bool
     */
    public function setContactSyncBlocked($value)
    {
        $this->setProperty("ContactSyncBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getPrintBlocked()
    {
        if (!$this->isPropertyAvailable("PrintBlocked")) {
            return null;
        }
        return $this->getProperty("PrintBlocked");
    }
    /**
     * @var bool
     */
    public function setPrintBlocked($value)
    {
        $this->setProperty("PrintBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getFingerprintBlocked()
    {
        if (!$this->isPropertyAvailable("FingerprintBlocked")) {
            return null;
        }
        return $this->getProperty("FingerprintBlocked");
    }
    /**
     * @var bool
     */
    public function setFingerprintBlocked($value)
    {
        $this->setProperty("FingerprintBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getDisableAppPinIfDevicePinIsSet()
    {
        if (!$this->isPropertyAvailable("DisableAppPinIfDevicePinIsSet")) {
            return null;
        }
        return $this->getProperty("DisableAppPinIfDevicePinIsSet");
    }
    /**
     * @var bool
     */
    public function setDisableAppPinIfDevicePinIsSet($value)
    {
        $this->setProperty("DisableAppPinIfDevicePinIsSet", $value, true);
    }
    /**
     * @return string
     */
    public function getMinimumRequiredOsVersion()
    {
        if (!$this->isPropertyAvailable("MinimumRequiredOsVersion")) {
            return null;
        }
        return $this->getProperty("MinimumRequiredOsVersion");
    }
    /**
     * @var string
     */
    public function setMinimumRequiredOsVersion($value)
    {
        $this->setProperty("MinimumRequiredOsVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getMinimumWarningOsVersion()
    {
        if (!$this->isPropertyAvailable("MinimumWarningOsVersion")) {
            return null;
        }
        return $this->getProperty("MinimumWarningOsVersion");
    }
    /**
     * @var string
     */
    public function setMinimumWarningOsVersion($value)
    {
        $this->setProperty("MinimumWarningOsVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getMinimumRequiredAppVersion()
    {
        if (!$this->isPropertyAvailable("MinimumRequiredAppVersion")) {
            return null;
        }
        return $this->getProperty("MinimumRequiredAppVersion");
    }
    /**
     * @var string
     */
    public function setMinimumRequiredAppVersion($value)
    {
        $this->setProperty("MinimumRequiredAppVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getMinimumWarningAppVersion()
    {
        if (!$this->isPropertyAvailable("MinimumWarningAppVersion")) {
            return null;
        }
        return $this->getProperty("MinimumWarningAppVersion");
    }
    /**
     * @var string
     */
    public function setMinimumWarningAppVersion($value)
    {
        $this->setProperty("MinimumWarningAppVersion", $value, true);
    }
}