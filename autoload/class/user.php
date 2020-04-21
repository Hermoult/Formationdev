<?php

class user{
    
    private $nom;

    function __construct($name)
    {
        $this->setNom($name);
    }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($name)
    {
        $this->nom = $name;

        return $this;
    }
}