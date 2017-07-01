<?php

/*
 * This file is part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Miky\Component\Order\Model;

use Miky\Component\Resource\Model\ResourceInterface;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
interface OrderItemUnitInterface extends ResourceInterface, AdjustableInterface
{
    /**
     * @return int
     */
    public function getTotal();

    /**
     * @return OrderItemInterface
     */
    public function getOrderItem();
}
