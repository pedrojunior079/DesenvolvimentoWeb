<?php

namespace Source\Inheritance\Event;
use Source\Inheritance\Address;

/**
 * Description of EventLive
 *
 * @author pedrojr
 */
class EventLive extends Event
{
    /*
     * @var Address
     */
    private $address;
    
    public function __construct($event, \DateTime $date, $price, $vacancies, Address $address) 
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }
    
    /**
     * @return Address
     */
    public function getAddress(): Address 
    {
        return $this->address;
    }


}
