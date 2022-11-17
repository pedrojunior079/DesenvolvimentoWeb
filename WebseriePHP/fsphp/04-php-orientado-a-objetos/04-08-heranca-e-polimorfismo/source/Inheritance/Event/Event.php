<?php

namespace Source\Inheritance\Event;

/**
 * Description of Event
 *
 * @author pedrojr
 */
class Event 
{
    private $event;
    private $date;
    private $price;
    private $register;
    protected $vacancies;
    
    /*
     * construtor para as variaveis:
     * $event,
     * \DateTime,
     * $date,
     * $price,
     * $vacancies
     */
    
    public function __construct($event, \DateTime $date, $price, $vacancies) 
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }
    
    public function register($fullName, $email)
    {
        if($this->vacancies >= 1){
           $this->vacancies -=1;
           $this->setRegister($fullName, $email);
           echo "<p class='trigger accept'> Parabéns {$fullName}, vaga garantida</p>";
        }else{
            echo "<p class='trigger error'> Desculpe {$fullName}, mas as vagas esgotaram</p>";
        }
    }
     
    protected function setRegister($fullName, $email): void
    {
       $this->register = [
          "name" => $fullName,
          "email" => $email
       ];
    }
    
    public function getEvent() 
    {
        return $this->event;
    }

    public function getDate(): \DateTime 
    {
        return $this->date->format("d/m/Y H:i");
    }

    public function getPrice() 
    {
        return $this->price;
    }

    public function getRegister() 
    {
        return $this->register;
    }

    public function getVacancies() 
    {
        return $this->vacancies;
    }


}


