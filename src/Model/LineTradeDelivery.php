<?php

declare(strict_types=1);

/*
 * This file is part of the ZUGFeRD PHP package.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Easybill\ZUGFeRD\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

class LineTradeDelivery
{
    #[Type(Quantity::class)]
    #[SerializedName('BilledQuantity')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public Quantity $billedQuantity;

    #[Type(Quantity::class)]
    #[SerializedName('ChargeFreeQuantity')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public ?Quantity $chargeFreeQuantity = null;

    #[Type(Quantity::class)]
    #[SerializedName('PackageQuantity')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public ?Quantity $packageQuantity = null;

    #[Type(SupplyChainEvent::class)]
    #[SerializedName('ActualDeliverySupplyChainEvent')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public ?SupplyChainEvent $chainEvent = null;
}
