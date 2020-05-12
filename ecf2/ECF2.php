<?php

/**
 * 
 * EXERCICE N°1
 * 
 * Les utilisateurs de l'application "exo1" sont caractérisés par:
 * un identifiant numérique unique, un nom, un prénom, une date de naissance,
 * un mot de passe. 
 * 
 *          a/ Ecrivez ci-dessous, entre les deux balises div sous forme d'une liste html 
 *             tout les attributs (colonnes) nécessaires à l'expression de la table user 
 *             en base de données, ainsi que le type de chacun des attributs.
 *  -------------------------------------------------------------------------------------*/?>
<div id="reponse a">

    <ol id="liste ordonnée des attributs">
        <li>int id (primary key) (auto incrementation)</li>
        <li>string nom</li>
        <li>string prenom</li>
        <li>date dateDeNaissance</li>
        <li>string motDePasse</li>
    </ol>

</div>

<?php 

/**
 *          b/ Codez ci-dessous la classe User correspondante avec 
 *             les accesseurs et les mutateurs de chaque attributs privés.
 *              !!! ATTENTION !!! Ne documentez pas la classe
 *  -------------------------------------------------------------------------------------*/
//Codez sous cette ligne de commentaire sans rajouter de bornes de langage

class User{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;
    private $_motDePasse;
    

    public function get_id()
    {
        return $this->_id;
    }
    public function set_id($_id)
    {
        $this->_id = $_id;

        return $this;
    }
    


    public function get_nom()
    {
        return $this->_nom;
    }


    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }


    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    public function get_dateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }


    public function set_dateDeNaissance($_dateDeNaissance)
    {
        $this->_dateDeNaissance = $_dateDeNaissance;

        return $this;
    }


    public function get_motDePasse()
    {
        return $this->_motDePasse;
    }

    public function set_motDePasse($_motDePasse)
    {
        $this->_motDePasse = $_motDePasse;

        return $this;
    }
}


/**
 *          c/ Copier-coller la classe provenant de la question b et renommez la User2,
 *             ajouter lui un constructeur qui appelle une méthode hydrate() et codez cette méthode.
 *             Le tableau de données pour l'hydratation est fourni. 
 *             Vous documenterez ensuite cette classe
 *  -------------------------------------------------------------------------------------*/
//Codez sous l'affectation de la variable $attributs sans rajouter de bornes de langage

$attributs = array('1','Coquelourde','Fernand','17/02/1968','ginettedu72');


class User2{  
    
    /**
     * _id
     *
     * @var int
     */
    private $_id;    
    /**
     * _nom
     *
     * @var string
     */
    private $_nom;    
    /**
     * _prenom
     *
     * @var string
     */
    private $_prenom;    
    /**
     * _dateDeNaissance
     *
     * @var date
     */
    private $_dateDeNaissance;    
    /**
     * _motDePasse
     *
     * @var string
     */
    private $_motDePasse;
    
    
    /**
     * fonction __construct, s'execute lors de l'instanciation de l'objet, execute la fonction hydrate
     *
     * @param  mixed $attributs
     * @return void
     */
    public function __construct(array $donnees){

        $this->hydrate($donnees);
    }
    
        
    /**
     * fonction hydrate avec un tableau simple
     *
     * @param  mixed $values
     * @return void
     */
    private function hydrate(array $values)
    {
        if (isset($values)) {
            $this->set_id($values[0]);
            $this->set_nom($values[1]);
            $this->set_prenom($values[2]);
            $this->set_dateDeNaissance($values[3]);
            $this->set_motDePasse($values[4]);
        } else
        return null;
    }
    /**
     * fonction hydrate avec un tableau associatif
     *
     * @param  mixed $donnees
     * @return void
     */
    public function hydrateKey(array $donnees)
        {
                foreach ($donnees as $key => $value) {
                        $method = 'set_'.$key;
    
                        if (method_exists($this, $method)) {
                                $this->$method($value);
                        }
                }
        }
    
    /**
     * Get _id
     *
     * @return  mixed
     */ 
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Set _id
     *
     * @param  mixed  $_id  _id
     *
     * @return  self
     */ 
    public function set_id($_id)
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Get _nom
     *
     * @return  mixed
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set _nom
     *
     * @param  mixed  $_nom  _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get _prenom
     *
     * @return  mixed
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set _prenom
     *
     * @param  mixed  $_prenom  _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get _dateDeNaissance
     *
     * @return  mixed
     */ 
    public function get_dateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    /**
     * Set _dateDeNaissance
     *
     * @param  mixed  $_dateDeNaissance  _dateDeNaissance
     *
     * @return  self
     */ 
    public function set_dateDeNaissance($_dateDeNaissance)
    {
        $this->_dateDeNaissance = $_dateDeNaissance;

        return $this;
    }

    /**
     * Get _motDePasse
     *
     * @return  mixed
     */ 
    public function get_motDePasse()
    {
        return $this->_motDePasse;
    }

    /**
     * Set _motDePasse
     *
     * @param  mixed  $_motDePasse  _motDePasse
     *
     * @return  self
     */ 
    public function set_motDePasse($_motDePasse)
    {
        $this->_motDePasse = $_motDePasse;

        return $this;
    }
    }


/**
 *          d/ instanciez un objet $user2 provenant de votre classe User2
 *  -------------------------------------------------------------------------------------*/
//Codez sous cette ligne de commentaire sans rajouter de bornes de langage


$user2 =  new User2($attributs);


/**
 * 
 * EXERCICE N°2
 * 
 *  Rédigez les requêtes SQL demandées sur la table user dans les méthodes PDO prepare()
 *  ------------------------------------------------------------------------------------- 
 * EXEMPLE :
 * $sql = 'SELECT nom, couleur, calories FROM fruit WHERE calories < :calories AND couleur = :couleur';*/
/* $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':calories' => 150, ':couleur' => 'red'));
    $red = $sth->fetchAll();
    $sth->execute(array(':calories' => 175, ':couleur' => 'yellow'));
    $yellow = $sth->fetchAll(); 
*/
/*
 *          a/ Sélectionner le nom de tous les utilisateurs de la table
 *  -------------------------------------------------------------------------------------*/


$dbh = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2');
$sth = $dbh->prepare('SELECT `nom` FROM user');
$exec = $sth->execute();
$response = $exec->fetchAll();




/**
 *          b/ Sélectionner toutes les infos de l'utilisateur d'id 8 de la table
 *  -------------------------------------------------------------------------------------*/

$dbh = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2');
$sth = $dbh->prepare('SELECT * FROM user WHERE id=8');
$exec = $sth->execute();
$response = $exec->fetchAll();

?>