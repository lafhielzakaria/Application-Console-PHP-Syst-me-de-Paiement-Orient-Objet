<?php

class Client
{
    private $id;
    private $name;
    private $email;
    
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
   
    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
}
