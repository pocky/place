<?php

namespace Black\Component\Place\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\Entity;

class Place implements Entity
{
    protected $placeId;

    protected $name;

    protected $logo;

    protected $photos;

    protected $telephone;

    protected $faxNumber;

    public function __construct(
        PlaceId $placeId,
        $name,
        $logo,
        $photos,
        $telephone,
        $faxNumber
    ) {
        $this->placeId   = $placeId;
        $this->name      = $name;
        $this->logo      = $logo;
        $this->photos    = $photos;
        $this->telephone = $telephone;
        $this->faxNumber = $faxNumber;
    }



    public function getPlaceId()
    {
        return $this->placeId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function getPhotos()
    {
        return $this->photos;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }
}
