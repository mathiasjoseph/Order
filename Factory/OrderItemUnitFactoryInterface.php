<?php

/*
 * This file is part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Miky\Component\Order\Factory;

use Miky\Component\Order\Model\OrderItemInterface;
use Miky\Component\Order\Model\OrderItemUnit;
use Miky\Component\Resource\Factory\FactoryInterface;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
interface OrderItemUnitFactoryInterface extends FactoryInterface
{
    /**
     * @param OrderItemInterface $orderItem
     *
     * @return OrderItemUnit
     */
    public function createForItem(OrderItemInterface $orderItem);
}
