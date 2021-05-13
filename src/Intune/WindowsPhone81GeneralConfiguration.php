<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;
class WindowsPhone81GeneralConfiguration extends ClientObject
{
    /**
     * @return bool
     */
    public function getApplyOnlyToWindowsPhone81()
    {
        if (!$this->isPropertyAvailable("ApplyOnlyToWindowsPhone81")) {
            return null;
        }
        return $this->getProperty("ApplyOnlyToWindowsPhone81");
    }
    /**
     * @var bool
     */
    public function setApplyOnlyToWindowsPhone81($value)
    {
        $this->setProperty("ApplyOnlyToWindowsPhone81", $value, true);
    }
    /**
     * @return bool
     */
    public function getAppsBlockCopyPaste()
    {
        if (!$this->isPropertyAvailable("AppsBlockCopyPaste")) {
            return null;
        }
        return $this->getProperty("AppsBlockCopyPaste");
    }
    /**
     * @var bool
     */
    public function setAppsBlockCopyPaste($value)
    {
        $this->setProperty("AppsBlockCopyPaste", $value, true);
    }
    /**
     * @return bool
     */
    public function getBluetoothBlocked()
    {
        if (!$this->isPropertyAvailable("BluetoothBlocked")) {
            return null;
        }
        return $this->getProperty("BluetoothBlocked");
    }
    /**
     * @var bool
     */
    public function setBluetoothBlocked($value)
    {
        $this->setProperty("BluetoothBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getCameraBlocked()
    {
        if (!$this->isPropertyAvailable("CameraBlocked")) {
            return null;
        }
        return $this->getProperty("CameraBlocked");
    }
    /**
     * @var bool
     */
    public function setCameraBlocked($value)
    {
        $this->setProperty("CameraBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getCellularBlockWifiTethering()
    {
        if (!$this->isPropertyAvailable("CellularBlockWifiTethering")) {
            return null;
        }
        return $this->getProperty("CellularBlockWifiTethering");
    }
    /**
     * @var bool
     */
    public function setCellularBlockWifiTethering($value)
    {
        $this->setProperty("CellularBlockWifiTethering", $value, true);
    }
    /**
     * @return bool
     */
    public function getDiagnosticDataBlockSubmission()
    {
        if (!$this->isPropertyAvailable("DiagnosticDataBlockSubmission")) {
            return null;
        }
        return $this->getProperty("DiagnosticDataBlockSubmission");
    }
    /**
     * @var bool
     */
    public function setDiagnosticDataBlockSubmission($value)
    {
        $this->setProperty("DiagnosticDataBlockSubmission", $value, true);
    }
    /**
     * @return bool
     */
    public function getEmailBlockAddingAccounts()
    {
        if (!$this->isPropertyAvailable("EmailBlockAddingAccounts")) {
            return null;
        }
        return $this->getProperty("EmailBlockAddingAccounts");
    }
    /**
     * @var bool
     */
    public function setEmailBlockAddingAccounts($value)
    {
        $this->setProperty("EmailBlockAddingAccounts", $value, true);
    }
    /**
     * @return bool
     */
    public function getLocationServicesBlocked()
    {
        if (!$this->isPropertyAvailable("LocationServicesBlocked")) {
            return null;
        }
        return $this->getProperty("LocationServicesBlocked");
    }
    /**
     * @var bool
     */
    public function setLocationServicesBlocked($value)
    {
        $this->setProperty("LocationServicesBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getMicrosoftAccountBlocked()
    {
        if (!$this->isPropertyAvailable("MicrosoftAccountBlocked")) {
            return null;
        }
        return $this->getProperty("MicrosoftAccountBlocked");
    }
    /**
     * @var bool
     */
    public function setMicrosoftAccountBlocked($value)
    {
        $this->setProperty("MicrosoftAccountBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getNfcBlocked()
    {
        if (!$this->isPropertyAvailable("NfcBlocked")) {
            return null;
        }
        return $this->getProperty("NfcBlocked");
    }
    /**
     * @var bool
     */
    public function setNfcBlocked($value)
    {
        $this->setProperty("NfcBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getPasswordBlockSimple()
    {
        if (!$this->isPropertyAvailable("PasswordBlockSimple")) {
            return null;
        }
        return $this->getProperty("PasswordBlockSimple");
    }
    /**
     * @var bool
     */
    public function setPasswordBlockSimple($value)
    {
        $this->setProperty("PasswordBlockSimple", $value, true);
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
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (!$this->isPropertyAvailable("PasswordMinutesOfInactivityBeforeScreenTimeout")) {
            return null;
        }
        return $this->getProperty("PasswordMinutesOfInactivityBeforeScreenTimeout");
    }
    /**
     * @var integer
     */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($value)
    {
        $this->setProperty("PasswordMinutesOfInactivityBeforeScreenTimeout", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordMinimumCharacterSetCount()
    {
        if (!$this->isPropertyAvailable("PasswordMinimumCharacterSetCount")) {
            return null;
        }
        return $this->getProperty("PasswordMinimumCharacterSetCount");
    }
    /**
     * @var integer
     */
    public function setPasswordMinimumCharacterSetCount($value)
    {
        $this->setProperty("PasswordMinimumCharacterSetCount", $value, true);
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
     * @return integer
     */
    public function getPasswordSignInFailureCountBeforeFactoryReset()
    {
        if (!$this->isPropertyAvailable("PasswordSignInFailureCountBeforeFactoryReset")) {
            return null;
        }
        return $this->getProperty("PasswordSignInFailureCountBeforeFactoryReset");
    }
    /**
     * @var integer
     */
    public function setPasswordSignInFailureCountBeforeFactoryReset($value)
    {
        $this->setProperty("PasswordSignInFailureCountBeforeFactoryReset", $value, true);
    }
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
     * @return bool
     */
    public function getScreenCaptureBlocked()
    {
        if (!$this->isPropertyAvailable("ScreenCaptureBlocked")) {
            return null;
        }
        return $this->getProperty("ScreenCaptureBlocked");
    }
    /**
     * @var bool
     */
    public function setScreenCaptureBlocked($value)
    {
        $this->setProperty("ScreenCaptureBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getStorageBlockRemovableStorage()
    {
        if (!$this->isPropertyAvailable("StorageBlockRemovableStorage")) {
            return null;
        }
        return $this->getProperty("StorageBlockRemovableStorage");
    }
    /**
     * @var bool
     */
    public function setStorageBlockRemovableStorage($value)
    {
        $this->setProperty("StorageBlockRemovableStorage", $value, true);
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
    public function getWebBrowserBlocked()
    {
        if (!$this->isPropertyAvailable("WebBrowserBlocked")) {
            return null;
        }
        return $this->getProperty("WebBrowserBlocked");
    }
    /**
     * @var bool
     */
    public function setWebBrowserBlocked($value)
    {
        $this->setProperty("WebBrowserBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getWifiBlocked()
    {
        if (!$this->isPropertyAvailable("WifiBlocked")) {
            return null;
        }
        return $this->getProperty("WifiBlocked");
    }
    /**
     * @var bool
     */
    public function setWifiBlocked($value)
    {
        $this->setProperty("WifiBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getWifiBlockAutomaticConnectHotspots()
    {
        if (!$this->isPropertyAvailable("WifiBlockAutomaticConnectHotspots")) {
            return null;
        }
        return $this->getProperty("WifiBlockAutomaticConnectHotspots");
    }
    /**
     * @var bool
     */
    public function setWifiBlockAutomaticConnectHotspots($value)
    {
        $this->setProperty("WifiBlockAutomaticConnectHotspots", $value, true);
    }
    /**
     * @return bool
     */
    public function getWifiBlockHotspotReporting()
    {
        if (!$this->isPropertyAvailable("WifiBlockHotspotReporting")) {
            return null;
        }
        return $this->getProperty("WifiBlockHotspotReporting");
    }
    /**
     * @var bool
     */
    public function setWifiBlockHotspotReporting($value)
    {
        $this->setProperty("WifiBlockHotspotReporting", $value, true);
    }
    /**
     * @return bool
     */
    public function getWindowsStoreBlocked()
    {
        if (!$this->isPropertyAvailable("WindowsStoreBlocked")) {
            return null;
        }
        return $this->getProperty("WindowsStoreBlocked");
    }
    /**
     * @var bool
     */
    public function setWindowsStoreBlocked($value)
    {
        $this->setProperty("WindowsStoreBlocked", $value, true);
    }
}