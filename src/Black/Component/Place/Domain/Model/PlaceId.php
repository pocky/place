<?php

namespace Black\Component\Place\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\ValueObject;

/**
 * Class PlaceId
 *
 * @author Alexandre Balmes <${COPYRIGHT_NAME}>
 * @license ${COPYRIGHT_LICENCE}
 */
class PlaceId implements ValueObject
{
    /**
     * @var string
     */
    private $placeId;

    /**
     * @param $placeId
     */
    public function __construct($placeId)
    {
        $this->placeId = (string) $placeId;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->placeId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("%s", $this->getValue());
    }

    /**
     * @param PlaceId $placeId
     * @return bool
     */
    public function isEqualTo(PlaceId $placeId)
    {
        return $this->getValue() === $placeId->getValue();
    }
}
