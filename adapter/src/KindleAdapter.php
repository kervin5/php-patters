<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/27/2018
 * Time: 9:30 PM
 */

namespace Acme;


class KindleAdapter implements BookInterface
{
    private $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open(){
        return $this->kindle->turnOn();
    }

    public function turnPage(){
        return $this->kindle->pressNextButton();
    }
}