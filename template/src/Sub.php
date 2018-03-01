<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/28/2018
 * Time: 8:51 PM
 */

namespace App;


abstract class Sub
{
    function make(){
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    protected function layBread(){
        var_dump('laying down the bread');
        return $this;
    }

    protected function addLettuce(){
        var_dump('add some lettuce');
        return $this;
    }

    protected function addSauces(){
        var_dump('add sauces');
        return $this;
    }

    public abstract function addPrimaryToppings();
}