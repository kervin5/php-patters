<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/28/2018
 * Time: 8:47 PM
 */

namespace App;


class VeggieSub extends Sub
{
    public  function addPrimaryToppings(){
        var_dump('add turkey');
        return $this;
    }


}