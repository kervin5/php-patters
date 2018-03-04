<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 3/4/2018
 * Time: 1:09 PM
 */

class Customer
{
    protected $type;

    public function type()
    {
        return $this->type;
    }

    public function __construct($type)
    {
        $this->type = $type;
    }


}