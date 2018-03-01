<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/27/2018
 * Time: 9:24 PM
 */

namespace Acme;

interface BookInterface
{
    public function open();

    public function turnPage();
}