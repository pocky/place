<?php

namespace spec\Black\Component\Place\Domain\Model;

use Black\Component\Place\Domain\Model\PlaceId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlaceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Place\Domain\Model\Place');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\Entity');
    }

    function let()
    {
        $placeId = new PlaceId(1234);

        $this->beConstructedWith(
            $placeId,
            'name',
            'logo',
            'photos',
            'telephone',
            'faxNumber'
        );
    }

    function it_should_have_a_place_id()
    {
        $this->getPlaceId()->shouldImplement('Black\Component\Place\Domain\Model\PlaceId');
        $this->getPlaceId()->getValue()->shouldReturn("1234");
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldReturn("name");
    }

    function it_should_have_a_logo()
    {
        $this->getLogo()->shouldReturn("logo");
    }

    function it_should_have_photos()
    {
        $this->getPhotos()->shouldReturn("photos");
    }

    function it_should_have_a_telephone()
    {
        $this->getTelephone()->shouldReturn("telephone");
    }

    function it_should_have_a_fax_number()
    {
        $this->getFaxNumber()->shouldReturn("faxNumber");
    }
}
