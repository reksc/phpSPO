<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;

class Windows81GeneralConfiguration extends ClientObject
{
    /**
     * @return bool
     */
    public function getAccountsBlockAddingNonMicrosoftAccountEmail()
    {
        if (!$this->isPropertyAvailable("AccountsBlockAddingNonMicrosoftAccountEmail")) {
            return null;
        }
        return $this->getProperty("AccountsBlockAddingNonMicrosoftAccountEmail");
    }
    /**
     * @var bool
     */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail($value)
    {
        $this->setProperty("AccountsBlockAddingNonMicrosoftAccountEmail", $value, true);
    }
    /**
     * @return bool
     */
    public function getApplyOnlyToWindows81()
    {
        if (!$this->isPropertyAvailable("ApplyOnlyToWindows81")) {
            return null;
        }
        return $this->getProperty("ApplyOnlyToWindows81");
    }
    /**
     * @var bool
     */
    public function setApplyOnlyToWindows81($value)
    {
        $this->setProperty("ApplyOnlyToWindows81", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserBlockAutofill()
    {
        if (!$this->isPropertyAvailable("BrowserBlockAutofill")) {
            return null;
        }
        return $this->getProperty("BrowserBlockAutofill");
    }
    /**
     * @var bool
     */
    public function setBrowserBlockAutofill($value)
    {
        $this->setProperty("BrowserBlockAutofill", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserBlockAutomaticDetectionOfIntranetSites()
    {
        if (!$this->isPropertyAvailable("BrowserBlockAutomaticDetectionOfIntranetSites")) {
            return null;
        }
        return $this->getProperty("BrowserBlockAutomaticDetectionOfIntranetSites");
    }
    /**
     * @var bool
     */
    public function setBrowserBlockAutomaticDetectionOfIntranetSites($value)
    {
        $this->setProperty("BrowserBlockAutomaticDetectionOfIntranetSites", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserBlockEnterpriseModeAccess()
    {
        if (!$this->isPropertyAvailable("BrowserBlockEnterpriseModeAccess")) {
            return null;
        }
        return $this->getProperty("BrowserBlockEnterpriseModeAccess");
    }
    /**
     * @var bool
     */
    public function setBrowserBlockEnterpriseModeAccess($value)
    {
        $this->setProperty("BrowserBlockEnterpriseModeAccess", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserBlockJavaScript()
    {
        if (!$this->isPropertyAvailable("BrowserBlockJavaScript")) {
            return null;
        }
        return $this->getProperty("BrowserBlockJavaScript");
    }
    /**
     * @var bool
     */
    public function setBrowserBlockJavaScript($value)
    {
        $this->setProperty("BrowserBlockJavaScript", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserBlockPlugins()
    {
        if (!$this->isPropertyAvailable("BrowserBlockPlugins")) {
            return null;
        }
        return $this->getProperty("BrowserBlockPlugins");
    }
    /**
     * @var bool
     */
    public function setBrowserBlockPlugins($value)
    {
        $this->setProperty("BrowserBlockPlugins", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserBlockPopups()
    {
        if (!$this->isPropertyAvailable("BrowserBlockPopups")) {
            return null;
        }
        return $this->getProperty("BrowserBlockPopups");
    }
    /**
     * @var bool
     */
    public function setBrowserBlockPopups($value)
    {
        $this->setProperty("BrowserBlockPopups", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserBlockSendingDoNotTrackHeader()
    {
        if (!$this->isPropertyAvailable("BrowserBlockSendingDoNotTrackHeader")) {
            return null;
        }
        return $this->getProperty("BrowserBlockSendingDoNotTrackHeader");
    }
    /**
     * @var bool
     */
    public function setBrowserBlockSendingDoNotTrackHeader($value)
    {
        $this->setProperty("BrowserBlockSendingDoNotTrackHeader", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserBlockSingleWordEntryOnIntranetSites()
    {
        if (!$this->isPropertyAvailable("BrowserBlockSingleWordEntryOnIntranetSites")) {
            return null;
        }
        return $this->getProperty("BrowserBlockSingleWordEntryOnIntranetSites");
    }
    /**
     * @var bool
     */
    public function setBrowserBlockSingleWordEntryOnIntranetSites($value)
    {
        $this->setProperty("BrowserBlockSingleWordEntryOnIntranetSites", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserRequireSmartScreen()
    {
        if (!$this->isPropertyAvailable("BrowserRequireSmartScreen")) {
            return null;
        }
        return $this->getProperty("BrowserRequireSmartScreen");
    }
    /**
     * @var bool
     */
    public function setBrowserRequireSmartScreen($value)
    {
        $this->setProperty("BrowserRequireSmartScreen", $value, true);
    }
    /**
     * @return string
     */
    public function getBrowserEnterpriseModeSiteListLocation()
    {
        if (!$this->isPropertyAvailable("BrowserEnterpriseModeSiteListLocation")) {
            return null;
        }
        return $this->getProperty("BrowserEnterpriseModeSiteListLocation");
    }
    /**
     * @var string
     */
    public function setBrowserEnterpriseModeSiteListLocation($value)
    {
        $this->setProperty("BrowserEnterpriseModeSiteListLocation", $value, true);
    }
    /**
     * @return string
     */
    public function getBrowserLoggingReportLocation()
    {
        if (!$this->isPropertyAvailable("BrowserLoggingReportLocation")) {
            return null;
        }
        return $this->getProperty("BrowserLoggingReportLocation");
    }
    /**
     * @var string
     */
    public function setBrowserLoggingReportLocation($value)
    {
        $this->setProperty("BrowserLoggingReportLocation", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserRequireHighSecurityForRestrictedSites()
    {
        if (!$this->isPropertyAvailable("BrowserRequireHighSecurityForRestrictedSites")) {
            return null;
        }
        return $this->getProperty("BrowserRequireHighSecurityForRestrictedSites");
    }
    /**
     * @var bool
     */
    public function setBrowserRequireHighSecurityForRestrictedSites($value)
    {
        $this->setProperty("BrowserRequireHighSecurityForRestrictedSites", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserRequireFirewall()
    {
        if (!$this->isPropertyAvailable("BrowserRequireFirewall")) {
            return null;
        }
        return $this->getProperty("BrowserRequireFirewall");
    }
    /**
     * @var bool
     */
    public function setBrowserRequireFirewall($value)
    {
        $this->setProperty("BrowserRequireFirewall", $value, true);
    }
    /**
     * @return bool
     */
    public function getBrowserRequireFraudWarning()
    {
        if (!$this->isPropertyAvailable("BrowserRequireFraudWarning")) {
            return null;
        }
        return $this->getProperty("BrowserRequireFraudWarning");
    }
    /**
     * @var bool
     */
    public function setBrowserRequireFraudWarning($value)
    {
        $this->setProperty("BrowserRequireFraudWarning", $value, true);
    }
    /**
     * @return bool
     */
    public function getCellularBlockDataRoaming()
    {
        if (!$this->isPropertyAvailable("CellularBlockDataRoaming")) {
            return null;
        }
        return $this->getProperty("CellularBlockDataRoaming");
    }
    /**
     * @var bool
     */
    public function setCellularBlockDataRoaming($value)
    {
        $this->setProperty("CellularBlockDataRoaming", $value, true);
    }
    /**
     * @return bool
     */
    public function getDiagnosticsBlockDataSubmission()
    {
        if (!$this->isPropertyAvailable("DiagnosticsBlockDataSubmission")) {
            return null;
        }
        return $this->getProperty("DiagnosticsBlockDataSubmission");
    }
    /**
     * @var bool
     */
    public function setDiagnosticsBlockDataSubmission($value)
    {
        $this->setProperty("DiagnosticsBlockDataSubmission", $value, true);
    }
    /**
     * @return bool
     */
    public function getPasswordBlockPicturePasswordAndPin()
    {
        if (!$this->isPropertyAvailable("PasswordBlockPicturePasswordAndPin")) {
            return null;
        }
        return $this->getProperty("PasswordBlockPicturePasswordAndPin");
    }
    /**
     * @var bool
     */
    public function setPasswordBlockPicturePasswordAndPin($value)
    {
        $this->setProperty("PasswordBlockPicturePasswordAndPin", $value, true);
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
    public function getStorageRequireDeviceEncryption()
    {
        if (!$this->isPropertyAvailable("StorageRequireDeviceEncryption")) {
            return null;
        }
        return $this->getProperty("StorageRequireDeviceEncryption");
    }
    /**
     * @var bool
     */
    public function setStorageRequireDeviceEncryption($value)
    {
        $this->setProperty("StorageRequireDeviceEncryption", $value, true);
    }
    /**
     * @return bool
     */
    public function getUpdatesRequireAutomaticUpdates()
    {
        if (!$this->isPropertyAvailable("UpdatesRequireAutomaticUpdates")) {
            return null;
        }
        return $this->getProperty("UpdatesRequireAutomaticUpdates");
    }
    /**
     * @var bool
     */
    public function setUpdatesRequireAutomaticUpdates($value)
    {
        $this->setProperty("UpdatesRequireAutomaticUpdates", $value, true);
    }
    /**
     * @return string
     */
    public function getWorkFoldersUrl()
    {
        if (!$this->isPropertyAvailable("WorkFoldersUrl")) {
            return null;
        }
        return $this->getProperty("WorkFoldersUrl");
    }
    /**
     * @var string
     */
    public function setWorkFoldersUrl($value)
    {
        $this->setProperty("WorkFoldersUrl", $value, true);
    }
}