<?php

namespace spec\Black\Component\Place\Domain\Model;

use Black\Component\Place\Domain\Model\PlaceId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlaceIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Place\Domain\Model\PlaceId');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\ValueObject');
    }

    function let()
    {
        $this->beConstructedWith("1234");
    }

    function it_should_have_a_value()
    {
        $this->getValue()->shouldBeEqualTo("1234");
    }

    function it_should_have_a_toString()
    {
        $this->__toString()->shouldBeEqualTo("1234");
    }

    function it_should_be_equal()
    {
        $object = new PlaceId(1234);
        $this->isEqualTo($object)->shouldReturn(true);
    }

    function it_should_not_be_equal()
    {
        $object = new PlaceId(12);
        $this->isEqualTo($object)->shouldReturn(false);
    }
}
