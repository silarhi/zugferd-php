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

class TradeSettlementLineMonetarySummation
{
    #[Type(Amount::class)]
    #[SerializedName('LineTotalAmount')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public Amount $totalAmount;

    #[Type(Amount::class)]
    #[SerializedName('TotalAllowanceChargeAmount')]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    public ?Amount $totalAllowanceChargeAmount = null;

    public static function create(string $totalAmount, ?string $totalAllowanceChargeAmount = null): self
    {
        $self = new self();
        $self->totalAmount = Amount::create($totalAmount);
        if (null != $totalAllowanceChargeAmount) {
            $self->totalAllowanceChargeAmount = Amount::create($totalAllowanceChargeAmount);
        }

        return $self;
    }
}
