<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;

class AndroidWorkProfileCompliancePolicy extends ClientObject
{
    /**
     * @return bool
     */
    public function getPasswordRequired()
    {
        if (!$this->isPropertyAvailable("PasswordRequired")) {
            return null;
        }
        return $this->getProperty("PasswordRequired");
    }
    /**
     * @var bool
     */
    public function setPasswordRequired($value)
    {
        $this->setProperty("PasswordRequired", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordMinimumLength()
    {
        if (!$this->isPropertyAvailable("PasswordMinimumLength")) {
            return null;
        }
        return $this->getProperty("PasswordMinimumLength");
    }
    /**
     * @var integer
     */
    public function setPasswordMinimumLength($value)
    {
        $this->setProperty("PasswordMinimumLength", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordMinutesOfInactivityBeforeLock()
    {
        if (!$this->isPropertyAvailable("PasswordMinutesOfInactivityBeforeLock")) {
            return null;
        }
        return $this->getProperty("PasswordMinutesOfInactivityBeforeLock");
    }
    /**
     * @var integer
     */
    public function setPasswordMinutesOfInactivityBeforeLock($value)
    {
        $this->setProperty("PasswordMinutesOfInactivityBeforeLock", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordExpirationDays()
    {
        if (!$this->isPropertyAvailable("PasswordExpirationDays")) {
            return null;
        }
        return $this->getProperty("PasswordExpirationDays");
    }
    /**
     * @var integer
     */
    public function setPasswordExpirationDays($value)
    {
        $this->setProperty("PasswordExpirationDays", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordPreviousPasswordBlockCount()
    {
        if (!$this->isPropertyAvailable("PasswordPreviousPasswordBlockCount")) {
            return null;
        }
        return $this->getProperty("PasswordPreviousPasswordBlockCount");
    }
    /**
     * @var integer
     */
    public function setPasswordPreviousPasswordBlockCount($value)
    {
        $this->setProperty("PasswordPreviousPasswordBlockCount", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityPreventInstallAppsFromUnknownSources()
    {
        if (!$this->isPropertyAvailable("SecurityPreventInstallAppsFromUnknownSources")) {
            return null;
        }
        return $this->getProperty("SecurityPreventInstallAppsFromUnknownSources");
    }
    /**
     * @var bool
     */
    public function setSecurityPreventInstallAppsFromUnknownSources($value)
    {
        $this->setProperty("SecurityPreventInstallAppsFromUnknownSources", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityDisableUsbDebugging()
    {
        if (!$this->isPropertyAvailable("SecurityDisableUsbDebugging")) {
            return null;
        }
        return $this->getProperty("SecurityDisableUsbDebugging");
    }
    /**
     * @var bool
     */
    public function setSecurityDisableUsbDebugging($value)
    {
        $this->setProperty("SecurityDisableUsbDebugging", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityRequireVerifyApps()
    {
        if (!$this->isPropertyAvailable("SecurityRequireVerifyApps")) {
            return null;
        }
        return $this->getProperty("SecurityRequireVerifyApps");
    }
    /**
     * @var bool
     */
    public function setSecurityRequireVerifyApps($value)
    {
        $this->setProperty("SecurityRequireVerifyApps", $value, true);
    }
    /**
     * @return bool
     */
    public function getDeviceThreatProtectionEnabled()
    {
        if (!$this->isPropertyAvailable("DeviceThreatProtectionEnabled")) {
            return null;
        }
        return $this->getProperty("DeviceThreatProtectionEnabled");
    }
    /**
     * @var bool
     */
    public function setDeviceThreatProtectionEnabled($value)
    {
        $this->setProperty("DeviceThreatProtectionEnabled", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityBlockJailbrokenDevices()
    {
        if (!$this->isPropertyAvailable("SecurityBlockJailbrokenDevices")) {
            return null;
        }
        return $this->getProperty("SecurityBlockJailbrokenDevices");
    }
    /**
     * @var bool
     */
    public function setSecurityBlockJailbrokenDevices($value)
    {
        $this->setProperty("SecurityBlockJailbrokenDevices", $value, true);
    }
    /**
     * @return string
     */
    public function getOsMinimumVersion()
    {
        if (!$this->isPropertyAvailable("OsMinimumVersion")) {
            return null;
        }
        return $this->getProperty("OsMinimumVersion");
    }
    /**
     * @var string
     */
    public function setOsMinimumVersion($value)
    {
        $this->setProperty("OsMinimumVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getOsMaximumVersion()
    {
        if (!$this->isPropertyAvailable("OsMaximumVersion")) {
            return null;
        }
        return $this->getProperty("OsMaximumVersion");
    }
    /**
     * @var string
     */
    public function setOsMaximumVersion($value)
    {
        $this->setProperty("OsMaximumVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getMinAndroidSecurityPatchLevel()
    {
        if (!$this->isPropertyAvailable("MinAndroidSecurityPatchLevel")) {
            return null;
        }
        return $this->getProperty("MinAndroidSecurityPatchLevel");
    }
    /**
     * @var string
     */
    public function setMinAndroidSecurityPatchLevel($value)
    {
        $this->setProperty("MinAndroidSecurityPatchLevel", $value, true);
    }
    /**
     * @return bool
     */
    public function getStorageRequireEncryption()
    {
        if (!$this->isPropertyAvailable("StorageRequireEncryption")) {
            return null;
        }
        return $this->getProperty("StorageRequireEncryption");
    }
    /**
     * @var bool
     */
    public function setStorageRequireEncryption($value)
    {
        $this->setProperty("StorageRequireEncryption", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityRequireSafetyNetAttestationBasicIntegrity()
    {
        if (!$this->isPropertyAvailable("SecurityRequireSafetyNetAttestationBasicIntegrity")) {
            return null;
        }
        return $this->getProperty("SecurityRequireSafetyNetAttestationBasicIntegrity");
    }
    /**
     * @var bool
     */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity($value)
    {
        $this->setProperty("SecurityRequireSafetyNetAttestationBasicIntegrity", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityRequireSafetyNetAttestationCertifiedDevice()
    {
        if (!$this->isPropertyAvailable("SecurityRequireSafetyNetAttestationCertifiedDevice")) {
            return null;
        }
        return $this->getProperty("SecurityRequireSafetyNetAttestationCertifiedDevice");
    }
    /**
     * @var bool
     */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice($value)
    {
        $this->setProperty("SecurityRequireSafetyNetAttestationCertifiedDevice", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityRequireGooglePlayServices()
    {
        if (!$this->isPropertyAvailable("SecurityRequireGooglePlayServices")) {
            return null;
        }
        return $this->getProperty("SecurityRequireGooglePlayServices");
    }
    /**
     * @var bool
     */
    public function setSecurityRequireGooglePlayServices($value)
    {
        $this->setProperty("SecurityRequireGooglePlayServices", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityRequireUpToDateSecurityProviders()
    {
        if (!$this->isPropertyAvailable("SecurityRequireUpToDateSecurityProviders")) {
            return null;
        }
        return $this->getProperty("SecurityRequireUpToDateSecurityProviders");
    }
    /**
     * @var bool
     */
    public function setSecurityRequireUpToDateSecurityProviders($value)
    {
        $this->setProperty("SecurityRequireUpToDateSecurityProviders", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityRequireCompanyPortalAppIntegrity()
    {
        if (!$this->isPropertyAvailable("SecurityRequireCompanyPortalAppIntegrity")) {
            return null;
        }
        return $this->getProperty("SecurityRequireCompanyPortalAppIntegrity");
    }
    /**
     * @var bool
     */
    public function setSecurityRequireCompanyPortalAppIntegrity($value)
    {
        $this->setProperty("SecurityRequireCompanyPortalAppIntegrity", $value, true);
    }
}