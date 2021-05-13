<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Intune;

use Office365\Entity;

class Windows81CompliancePolicy extends Entity
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
}