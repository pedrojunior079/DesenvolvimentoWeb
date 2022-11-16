<?php

namespace Source\Qualifield;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    private $error;

    public function setUser($firstName, $lastName, $email)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        if($this->setEmail($email))
        {
            $this->error = "O e-mail {$this->getEmail()} não é valido!";
            return false;
        }
        return true;
    }

    public function getError()
    {
        return $this->error;
    }
    

    public function getFirstName()
    {
        return $this->firstName;
    }

    private function setFirstName($firstName)
    {
        $this->firstName = filter_var($firstName);
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    private function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName);
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Valida o e-mail do usuário em um formato válido!
     *
     * @param [type] $email
     * @return void
     */
    private function setEmail($email)
    {
        $this->email = $email;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
}

?>