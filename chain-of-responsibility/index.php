<?php

abstract class HomeChecker {
    protected $successor;

    public abstract function check(HomeSatus $home);

    public function setSuccessor(HomeChecker $successor){
        $this->successor = $successor;
    }

    public function next(HomeSatus $home){
        if($this->successor){
            $this->successor->check($home);
        }

    }
}

class Locks extends HomeChecker {
    public function check(HomeSatus $home){
        if(!$home->alarmOn){
            throw new Exception('The doors are not locked!! Abort abort.!');
        }
        $this->next($home);
    }
}

class Lights extends HomeChecker {
    public function check(HomeSatus $home){
        if(!$home->lightsOff){
            throw new Exception('The lights are still on!! Abort abort.!');
        }
        $this->next($home);
    }
}

class Alarm extends HomeChecker {
    public function check(HomeSatus $home){
        if(!$home->alarmOn){
            throw new Exception('The alarm has not been set!! Abort abort.!');
        }
        $this->next($home);
    }
}

class HomeSatus {
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true;
}

$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

$locks->setSuccessor($lights);
$lights->setSuccessor($alarm);

$locks->check(new HomeSatus());

