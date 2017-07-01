<?php

/*
 * This file is part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Miky\Component\Order\Factory;

use PhpSpec\ObjectBehavior;
use Miky\Component\Order\Factory\AdjustmentFactoryInterface;
use Miky\Component\Order\Model\AdjustmentInterface;
use Miky\Component\Resource\Factory\FactoryInterface;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
final class AdjustmentFactorySpec extends ObjectBehavior
{
    function let(FactoryInterface $adjustmentFactory)
    {
        $this->beConstructedWith($adjustmentFactory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Miky\Component\Order\Factory\AdjustmentFactory');
    }

    function it_implements_adjustment_factory_interface()
    {
        $this->shouldImplement(AdjustmentFactoryInterface::class);
    }

    function it_creates_new_adjustment($adjustmentFactory, AdjustmentInterface $adjustment)
    {
        $adjustmentFactory->createNew()->willReturn($adjustment);

        $this->createNew()->shouldReturn($adjustment);
    }

    function it_creates_new_adjustment_with_provided_data($adjustmentFactory, AdjustmentInterface $adjustment)
    {
        $adjustmentFactory->createNew()->willReturn($adjustment);
        $adjustment->setType('tax')->shouldBeCalled();
        $adjustment->setLabel('Tax description')->shouldBeCalled();
        $adjustment->setAmount(1000)->shouldBeCalled();
        $adjustment->setNeutral(false)->shouldBeCalled();

        $this->createWithData('tax', 'Tax description', 1000, false)->shouldReturn($adjustment);
    }
}
