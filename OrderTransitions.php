<?php

/*
 * This file is part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Miky\Component\Order;

class OrderTransitions
{
    const GRAPH = 'sylius_order';

    const TRANSITION_CREATE = 'create';
    const TRANSITION_CANCEL = 'cancel';
    const TRANSITION_FULFILL = 'fulfill';
}
