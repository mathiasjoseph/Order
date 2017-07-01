<?php

/*
 * This file is a part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Miky\Component\Order\Model;

use Miky\Component\Resource\Model\ResourceInterface;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
interface OrderSequenceInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function getIndex();

    public function incrementIndex();
}
