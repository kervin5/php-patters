<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/28/2018
 * Time: 8:18 PM
 */

namespace App;

class TurkeySub extends Sub
{
    public  function addPrimaryToppings(){
        var_dump('add turkey');
        return $this;
    }
}