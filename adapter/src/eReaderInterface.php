<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/27/2018
 * Time: 9:29 PM
 */

namespace Acme;

interface eReaderInterface
{
    public function turnOn();

    public function pressNextButton();
}