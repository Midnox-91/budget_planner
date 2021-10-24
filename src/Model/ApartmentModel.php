<?php

namespace Midnox\Model;

class ApartmentModel
{

    public $date;
    public $costType;
    public $quantity;
    public $pricePerUnit;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getCostType()
    {
        return $this->costType;
    }

    /**
     * @param mixed $costType
     */
    public function setCostType($costType)
    {
        $this->costType = $costType;
    }

    /**
     * @return mixed
     */
    public function getPricePerUnit()
    {
        return $this->pricePerUnit;
    }

    /**
     * @param mixed $pricePerUnit
     */
    public function setPricePerUnit($pricePerUnit)
    {
        $this->pricePerUnit = $pricePerUnit;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


}