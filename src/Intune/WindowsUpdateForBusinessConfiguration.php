<?php

/**
 * Modified: 2020-05-26T22:12:31+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;

class WindowsUpdateForBusinessConfiguration extends ClientObject
{
    /**
     * @return bool
     */
    public function getMicrosoftUpdateServiceAllowed()
    {
        if (!$this->isPropertyAvailable("MicrosoftUpdateServiceAllowed")) {
            return null;
        }
        return $this->getProperty("MicrosoftUpdateServiceAllowed");
    }
    /**
     * @var bool
     */
    public function setMicrosoftUpdateServiceAllowed($value)
    {
        $this->setProperty("MicrosoftUpdateServiceAllowed", $value, true);
    }
    /**
     * @return bool
     */
    public function getDriversExcluded()
    {
        if (!$this->isPropertyAvailable("DriversExcluded")) {
            return null;
        }
        return $this->getProperty("DriversExcluded");
    }
    /**
     * @var bool
     */
    public function setDriversExcluded($value)
    {
        $this->setProperty("DriversExcluded", $value, true);
    }
    /**
     * @return integer
     */
    public function getQualityUpdatesDeferralPeriodInDays()
    {
        if (!$this->isPropertyAvailable("QualityUpdatesDeferralPeriodInDays")) {
            return null;
        }
        return $this->getProperty("QualityUpdatesDeferralPeriodInDays");
    }
    /**
     * @var integer
     */
    public function setQualityUpdatesDeferralPeriodInDays($value)
    {
        $this->setProperty("QualityUpdatesDeferralPeriodInDays", $value, true);
    }
    /**
     * @return integer
     */
    public function getFeatureUpdatesDeferralPeriodInDays()
    {
        if (!$this->isPropertyAvailable("FeatureUpdatesDeferralPeriodInDays")) {
            return null;
        }
        return $this->getProperty("FeatureUpdatesDeferralPeriodInDays");
    }
    /**
     * @var integer
     */
    public function setFeatureUpdatesDeferralPeriodInDays($value)
    {
        $this->setProperty("FeatureUpdatesDeferralPeriodInDays", $value, true);
    }
    /**
     * @return bool
     */
    public function getQualityUpdatesPaused()
    {
        if (!$this->isPropertyAvailable("QualityUpdatesPaused")) {
            return null;
        }
        return $this->getProperty("QualityUpdatesPaused");
    }
    /**
     * @var bool
     */
    public function setQualityUpdatesPaused($value)
    {
        $this->setProperty("QualityUpdatesPaused", $value, true);
    }
    /**
     * @return bool
     */
    public function getFeatureUpdatesPaused()
    {
        if (!$this->isPropertyAvailable("FeatureUpdatesPaused")) {
            return null;
        }
        return $this->getProperty("FeatureUpdatesPaused");
    }
    /**
     * @var bool
     */
    public function setFeatureUpdatesPaused($value)
    {
        $this->setProperty("FeatureUpdatesPaused", $value, true);
    }
    /**
     * @return WindowsUpdateInstallScheduleType
     */
    public function getInstallationSchedule()
    {
        if (!$this->isPropertyAvailable("InstallationSchedule")) {
            return null;
        }
        return $this->getProperty("InstallationSchedule");
    }
    /**
     * @var WindowsUpdateInstallScheduleType
     */
    public function setInstallationSchedule($value)
    {
        $this->setProperty("InstallationSchedule", $value, true);
    }
}