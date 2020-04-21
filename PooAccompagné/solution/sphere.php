<?php

class Sphere{

    private $_rayon;
    private $_surface;
    private $_volume;
    private $_surface_add;
    private $_volume_add;
    
    
    public function __construct($rayon){

        $this->set_rayon($rayon);
    }

    public function calcul_surface_sphere(){

        $this->set_surface(4*pi()*pow($this->get_rayon(),2));
        return $this->get_surface();
    }

    public function calcul_volume_sphere(){

        $this->set_volume(4*pi()*pow($this->get_rayon(),3)/3);
        return $this->get_volume();
    }

    public function calcul_surface_2spheres($surface1,$surface2){

        $this->set_surface_add($surface1 + $surface2);
        return $this->get_surface_add();
    }
    
    public function calcul_volume_2spheres($volume1,$volume2){

        $this->set_volume_add($volume1 + $volume2);
        return $this->get_volume_add();

    }

    // Getter & Setter
        /**
         * Get the value of _rayon
         */ 
        public function get_rayon()
        {
            return $this->_rayon;
        }

        /**
         * Set the value of _rayon
         *
         * @return  self
         */ 
        public function set_rayon($_rayon)
        {
            $this->_rayon = $_rayon;

            return $this;
        }

        /**
         * Get the value of _surface
         */ 
        public function get_surface()
        {
            return $this->_surface;
        }

        /**
         * Set the value of _surface
         *
         * @return  self
         */ 
        public function set_surface($_surface)
        {
            $this->_surface = $_surface;

            return $this;
        }

        /**
         * Get the value of _volume
         */ 
        public function get_volume()
        {
            return $this->_volume;
        }

        /**
         * Set the value of _volume
         *
         * @return  self
         */ 
        public function set_volume($_volume)
        {
            $this->_volume = $_volume;

            return $this;
        }

        /**
         * Get the value of _surface_add
         */ 
        public function get_surface_add()
        {
            return $this->_surface_add;
        }

        /**
         * Set the value of _surface_add
         *
         * @return  self
         */ 
        public function set_surface_add($_surface_add)
        {
            $this->_surface_add = $_surface_add;

            return $this;
        }

        /**
         * Get the value of _volume_add
         */ 
        public function get_volume_add()
        {
            return $this->_volume_add;
        }

        /**
         * Set the value of _volume_add
         *
         * @return  self
         */ 
        public function set_volume_add($_volume_add)
        {
            $this->_volume_add = $_volume_add;

            return $this;
        }
}