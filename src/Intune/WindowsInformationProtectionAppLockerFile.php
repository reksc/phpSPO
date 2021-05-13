<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Intune;

use Office365\Entity;
class WindowsInformationProtectionAppLockerFile extends Entity
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
    public function getFileHash()
    {
        if (!$this->isPropertyAvailable("FileHash")) {
            return null;
        }
        return $this->getProperty("FileHash");
    }
    /**
     * @var string
     */
    public function setFileHash($value)
    {
        $this->setProperty("FileHash", $value, true);
    }
    /**
     * @return string
     */
    public function getFile()
    {
        if (!$this->isPropertyAvailable("File")) {
            return null;
        }
        return $this->getProperty("File");
    }
    /**
     * @var string
     */
    public function setFile($value)
    {
        $this->setProperty("File", $value, true);
    }
    /**
     * @return string
     */
    public function getVersion()
    {
        if (!$this->isPropertyAvailable("Version")) {
            return null;
        }
        return $this->getProperty("Version");
    }
    /**
     * @var string
     */
    public function setVersion($value)
    {
        $this->setProperty("Version", $value, true);
    }
}