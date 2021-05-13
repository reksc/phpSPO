<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class WindowsFirewallNetworkProfile extends ClientValue
{
    /**
     * @var bool
     */
    public $StealthModeBlocked;
    /**
     * @var bool
     */
    public $IncomingTrafficBlocked;
    /**
     * @var bool
     */
    public $UnicastResponsesToMulticastBroadcastsBlocked;
    /**
     * @var bool
     */
    public $InboundNotificationsBlocked;
    /**
     * @var bool
     */
    public $AuthorizedApplicationRulesFromGroupPolicyMerged;
    /**
     * @var bool
     */
    public $GlobalPortRulesFromGroupPolicyMerged;
    /**
     * @var bool
     */
    public $ConnectionSecurityRulesFromGroupPolicyMerged;
    /**
     * @var bool
     */
    public $OutboundConnectionsBlocked;
    /**
     * @var bool
     */
    public $InboundConnectionsBlocked;
    /**
     * @var bool
     */
    public $SecuredPacketExemptionAllowed;
    /**
     * @var bool
     */
    public $PolicyRulesFromGroupPolicyMerged;
}