<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/27/2018
 * Time: 9:09 PM
 */

namespace Acme;


class Book implements BookInterface
{
    public function open() {
        var_dump('Opening the paper book') ;
    }

    public function turnPage() {
        var_dump('Turning the page of the paper book') ;
    }
}