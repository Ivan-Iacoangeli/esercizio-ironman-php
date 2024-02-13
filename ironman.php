<?php

abstract class Casco{
    abstract public function jarvis();
}

abstract class ArtoDestro{
    abstract public function GuantoDestro();
}

abstract class ArtoSinistro{
    abstract public function GuantoSinistro();
}

abstract class Corpo{
    abstract public function Armatura();
}

abstract class ArtiInferiori{
    abstract public function Move();
}

//casco
class Mappa extends Casco{
    public function jarvis(){
        echo "jarvis dove è il MC più vicino? \n";
    }
    
}

class Aiuto extends Casco{
    public function jarvis(){
        echo"Jarvis chiama Pepper \n";
    }
}

//Arto destro
class GuantoInfinito extends ArtoDestro{
    public function GuantoDestro(){
        echo "Io sono Ironman \n";
    }
}

class Laser extends ArtoDestro{
    public function GuantoDestro(){
        echo "tsummmmm \n";
    }
}

//Arto sinistro
class RoboSpia extends ArtoSinistro{
    public function GuantoSinistro(){
        echo "Spiate Peter Parker \n";
    }
}

class Razzetti extends ArtoSinistro{
    public function GuantoSinistro(){
        echo "Faccio esplodere tutto \n";
    }
}

//Corpo
class Reattore extends Corpo{
    public function Armatura(){
        echo "La dimostrazione che Tony Stark ha un cuore \n";
    }
}

class Alette extends Corpo{
    public function Armatura(){
        echo "non servono a nulla \n";
    }
}

//Arti Inferiori
class Piedi extends ArtiInferiori{
    public function Move(){
        echo "Quanto è bello andare in giro con i razzi sotto i piedi \n";
    }
}

class Rolley extends ArtiInferiori{
    public function Move(){
        echo "Mi diverto con le rotelle \n";
    }
}

//Creiamo il nostro Ironman
class Ironman {
    public $casco;
    public $guantoD;
    public $guantoS;
    public $corpo;
    public $gambe;

    public function __construct(Casco $c , ArtoDestro $d , ArtoSinistro $s , Corpo $cp , ArtiInferiori $i)
    {
       $this->casco = $c;
       $this->guantoD = $d;
       $this->guantoS = $s;
       $this->corpo = $cp;
       $this->gambe = $i; 
    }

    public function casco(){
        $this->casco->Jarvis();
    }

    public function guantoD(){
        $this->guantoD->GuantoDestro();
    }

    public function guantoS(){
        $this->guantoS->GuantoSinistro();
    }

    public function corpo(){
        $this->corpo->Armatura();
    }

    public function movimento(){
        $this->gambe->Move();
    }
}

$ironman = new Ironman(new Mappa , new GuantoInfinito , new Robospia , new Reattore , new Piedi);
print_r($ironman);
$ironman->casco();
$ironman->guantoD();
$ironman->guantoS();
$ironman->corpo();
$ironman->movimento();



