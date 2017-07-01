<?php

/*
 * This file is part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Miky\Component\Order\Modifier;

use Miky\Component\Order\Model\OrderItemInterface;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
interface OrderItemQuantityModifierInterface
{
    /**
     * @param OrderItemInterface $orderItem
     * @param int $targetQuantity
     */
    public function modify(OrderItemInterface $orderItem, $targetQuantity);
}
