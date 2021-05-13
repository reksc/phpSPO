<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Entity;


class TelecomExpenseManagementPartner extends Entity
{
    /**
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
    /**
     * @return bool
     */
    public function getAppAuthorized()
    {
        if (!$this->isPropertyAvailable("AppAuthorized")) {
            return null;
        }
        return $this->getProperty("AppAuthorized");
    }
    /**
     * @var bool
     */
    public function setAppAuthorized($value)
    {
        $this->setProperty("AppAuthorized", $value, true);
    }
    /**
     * @return bool
     */
    public function getEnabled()
    {
        if (!$this->isPropertyAvailable("Enabled")) {
            return null;
        }
        return $this->getProperty("Enabled");
    }
    /**
     * @var bool
     */
    public function setEnabled($value)
    {
        $this->setProperty("Enabled", $value, true);
    }
}