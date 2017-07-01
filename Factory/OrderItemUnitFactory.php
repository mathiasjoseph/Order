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
use Miky\Component\Resource\Exception\UnsupportedMethodException;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
class OrderItemUnitFactory implements OrderItemUnitFactoryInterface
{
    /**
     * @var string
     */
    private $className;

    /**
     * @param string $className
     */
    public function __construct($className)
    {
        $this->className = $className;
    }

    /**
     * {@inheritdoc}
     */
    public function createNew()
    {
        throw new UnsupportedMethodException('createNew');
    }

    /**
     * @param OrderItemInterface $orderItem
     *
     * @return OrderItemUnit
     */
    public function createForItem(OrderItemInterface $orderItem)
    {
        return new $this->className($orderItem);
    }
}
