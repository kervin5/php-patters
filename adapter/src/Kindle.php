<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/27/2018
 * Time: 9:27 PM
 */

namespace Acme;


class Kindle implements eReaderInterface
{
    public function turnOn(){
        var_dump('Turn the kindle on') ;
    }

    public function pressNextButton(){
        var_dump('Go to the next page') ;
    }
}