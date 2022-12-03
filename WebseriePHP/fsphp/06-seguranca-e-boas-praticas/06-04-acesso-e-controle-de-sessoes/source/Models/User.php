<?php

namespace Source\Models;

/**
 * Description of UserEntity
 *
 * @author pedrojr
 */
class User 
{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $document;
    
    public function getFirst_name() {
        return $this->first_name;
    }


}
