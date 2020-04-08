<?php 

class vehicle {
    
    /**
     * Différents attributs, constantes et variable static
     *
     * @var boolean etat des pneus
     * @var int niveau du carburant
     * @var boolean etat du moteur
     * @var int chance de démarer
     * @var int puissance du moteur
     * 
     * @var int Puissance moteur faible
     * @var int Puissance moteur moyenne
     * @var int Puissance moteur élevé
     */
    private $_wheel_condition;
    private $_fuel_level;
    private $_engine_state = FALSE;
    private $_start_chance = 80;
    private $_engine_power;

    const LOW_ENGINE_POWER = 90;
    const MID_ENGINE_POWER= 110;
    const HIGH_ENGINE_POWER = 130;
    
    static $_honk= 'tuuut tuut';
    
    /**
     * fonction statique qui lie et affiche l'attribut static honk
     *
     * @return void
     */
    public static function toHonk(){
        return self::$_honk;
    }
    
    /**
     * Constructeur de notre objet, permet de rentrer les paramettres
     *
     * @param  mixed $_wheel_condition
     * @param  mixed $_fuel_level
     * @param  mixed $_engine_power
     * @return void
     */
    public function __construct($_wheel_condition, $_fuel_level,$_engine_power)
    {
        $this-> _wheel_condition=$_wheel_condition;
        $this-> _fuel_level=$_fuel_level;
        $this-> _engine_power=$_engine_power;
    }
    
    /**
     * Fonction d'allumage du moteur (80% de chance de réussite)
     *
     * @return void
     */
    public function engine_start ()
    {
        $start = rand(0,100);
        return $start < $this->_start_chance ? $this->_engine_state=TRUE:$this->_engine_state=FALSE;
    }
    
    /**
     * Fonction qui affiche chaque elements lorsque $_engine_power=TRUE   
     * Une premiere methode pour appeller la variable static est  imbriqué
     * @return void
     */
    public function affichage()
    {
        echo $this->_engine_state ? 'Engine started well' . '<br>' . 'wheel condition : '.$this -> _wheel_condition . '<br>' . 'Fuel level : '. $this -> _fuel_level. '<br>' .'Engine Power : '. $this->_engine_power.'<br>'.vehicle::toHonk().'<br>'.vehicle::toHonk():'Engine did not start well' ;
    }

    /**
     * Vérifie que l'on ne rentre pas d'autres valeurs que LOW,MID,HIGH
     *
     * @return  self
     */ 
    public function set_engine_power($_engine_power)
    {
        if (in_array($_engine_power, [self::LOW_ENGINE_POWER, self::MID_ENGINE_POWER, self::HIGH_ENGINE_POWER]))
    {
        $this->_engine_power = $_engine_power;
    }
        return $this;
    }

    /**
     * Set the value of _start_chance
     *
     * @return  self
     */ 
    public function set_start_chance($_start_chance)
    {
        $this->_start_chance = $_start_chance;

        return $this;
    }
    public function hydrate(array $donnees){

        if (isset($donnees['id']))
        {
        $this->set_start_chance($donnees['id']);
        }
    }
}