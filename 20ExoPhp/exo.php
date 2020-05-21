<?php

class Exercices {
// EXERCICE 1
    public function helloworld(){
        return 'Hello World !';
    }
// EXERCICE 2
    public function jeretourneMonArgument($arg){
        return $arg;
    }
// EXERCICE 3
    public function concatenation (string $arg1,string $arg2){
        return $arg1 . $arg2;
    }
// EXERCICE 4
    public function concatenationAvecEspace (string $arg1,string $arg2){
        return $arg1 .' '. $arg2;
    }
// EXERCICE 5
    public function somme(int $arg1, int $arg2){
        $sum = $arg1+$arg2;
        return $sum;
    }
// EXERCICE 6
    public function soustraction(int $arg1, int $arg2){
        $sum = $arg1-$arg2;
        return $sum;
    }
// EXERCICE 7
    public function multiplication(int $arg1, int $arg2){
    $sum = $arg1*$arg2;
    return $sum;
    }
// EXERCICE 8
    public function estIlMajeur(int $arg){
        if ($arg > 18)
            return TRUE;
        else
            return FALSE;
    }
// EXERCICE 9
    public function plusGrand(int $arg1, int $arg2){
        if ($arg1 > $arg2)
            return $arg1;
        else if ($arg1 < $arg2)
            return $arg2;
        else 
            echo 'Egalité parfaite messieurs';
    }
// EXERCICE 10
    public function plusPetit(int $arg1, int $arg2){
        if ($arg1 > $arg2)
            return $arg2;
        else if ($arg1 < $arg2)
            return $arg1;
        else 
            echo 'Egalité parfaite messieurs';
    }
// EXERCICE 11
    public function premierElementTableau(array $arg){
        if (!empty($arg))
            return $arg[0];
    }
// EXERCICE 12
    public function dernierElementTableau(array $arg){
        if (!empty($arg))
            return end($arg);
    }
// EXERCICE 13
    public function plusGrandTableau(array $arg){
        if (!empty($arg))
            return max($arg);
    }
// EXERCICE 14
    public function plusPetitTableau(array $arg){
        if (!empty($arg))
            return min($arg);
    }
// EXERCICE 15
    function verificationPassword(string $arg){
        if (strlen($arg) > 7 && ctype_alnum($arg) && preg_match('/(?=.*[a-z])(?=.*[A-Z])/', $arg)) 
            return true;
        else 
            return false;
        }
// EXERCICE 16
    public function capital(string $arg)
    {
        switch ($arg) {
            case 'France':
                return 'Paris';
                break;
            case 'Allemagne':
                return 'Berlin';
                break;
            case 'Italie':
                return 'Rome';
                break;
            case 'Maroc':
                return 'Rabat';
                break;
            case 'Espagne':
                return 'Madrid';
                break;
            case 'Portugal':
                return 'Lisbonne';
                break;
            case 'Angleterre':
                return 'Londres';
                break;
            default:
                return 'Inconnu';
                break;
        }
    }
// EXERCICE 17------------------ PAS REUSSI A METTRE DANS DES VARIABLES ET A RETURN
    function listHTML(string $nomListe, array $elementsListe){
        if ($nomListe || $elementsListe){
            echo '<h3>' . $nomListe . '</h3>';
            echo '<ul>';
            foreach ($elementsListe as $elements) 
                echo '<li>' . $elements . '</li>';
            echo  '</ul>';
            // return $titre.$bal1.$ville.$bal2;
            }else
                return NULL;
    }
// EXERCICE 18
    public function remplacerLesLettres(string $arg){
        $result = str_replace(['e','o','i'],[3,0,1],$arg);
        return $result;
    }

// EXERCICE 19
    public function quelleAnnee(){
        $date = idate("Y");
        return $date;
    }

// EXERCICE 20
    public function quelleDate(){
        $date = Date("d/m/Y");
        return $date;
    }

}
$ex = new Exercices;
    $a = $ex-> helloworld();
    $b = $ex ->jeretourneMonArgument('chess');
    $c = $ex ->concatenation('Antoine','Griezmann');
    $d = $ex ->concatenationAvecEspace('Ngolo','Kante');
    $e = $ex ->somme(10,16);
    $f = $ex ->soustraction(15,8);
    $g = $ex ->multiplication(5,5);
    $h = $ex ->estIlMajeur(19);
    $i = $ex ->plusGrand(18,20);
    $j = $ex ->plusPetit(18,20);
    $k = $ex ->premierElementTableau([]);
    $l = $ex ->dernierElementTableau(['yo','plus','syntaxe']);
    $m = $ex ->plusGrandTableau([]);
    $n = $ex ->plusPetitTableau(['3','5','4']);
    $o = $ex ->verificationPassword('Adrien123456');
    $p = $ex ->listHTML('Capitale Liste',["Paris", "Berlin", "Moscou","Prague"]);
    $q = $ex ->remplacerLesLettres('Bonjour les amis');
    $r = $ex ->quelleAnnee();
    $s = $ex ->quelleDate();

// Pour les test
    var_dump($a);
    print_r($b);
    echo($c);
