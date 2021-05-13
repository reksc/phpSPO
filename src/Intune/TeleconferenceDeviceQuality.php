<?php

/**
 * Modified: 2020-05-29T07:19:37+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class TeleconferenceDeviceQuality extends ClientValue
{
    /**
     * @var string
     */
    public $CallChainId;
    /**
     * @var string
     */
    public $ParticipantId;
    /**
     * @var string
     */
    public $MediaLegId;
    /**
     * @var string
     */
    public $DeviceName;
    /**
     * @var string
     */
    public $DeviceDescription;
    /**
     * @var string
     */
    public $CloudServiceName;
    /**
     * @var string
     */
    public $CloudServiceInstanceName;
    /**
     * @var string
     */
    public $CloudServiceDeploymentId;
    /**
     * @var string
     */
    public $CloudServiceDeploymentEnvironment;
}