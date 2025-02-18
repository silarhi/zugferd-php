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
use JMS\Serializer\Annotation\XmlList;

class SupplyChainTradeTransaction
{
    /**
     * @var SupplyChainTradeLineItem[]
     */
    #[Type('array<' . SupplyChainTradeLineItem::class . '>')]
    #[XmlList(inline: true, entry: 'IncludedSupplyChainTradeLineItem', namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public array $lineItems = [];

    #[Type(HeaderTradeAgreement::class)]
    #[SerializedName('ApplicableHeaderTradeAgreement')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public HeaderTradeAgreement $applicableHeaderTradeAgreement;

    #[Type(HeaderTradeDelivery::class)]
    #[SerializedName('ApplicableHeaderTradeDelivery')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public HeaderTradeDelivery $applicableHeaderTradeDelivery;

    #[Type(HeaderTradeSettlement::class)]
    #[SerializedName('ApplicableHeaderTradeSettlement')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public HeaderTradeSettlement $applicableHeaderTradeSettlement;
}
