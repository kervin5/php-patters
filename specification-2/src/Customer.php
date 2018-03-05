<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 3/4/2018
 * Time: 1:09 PM
 */

class Customer extends Illuminate\Database\Eloquent\Model
{
    protected $fillable = ['name','type'];

    public function type()
    {
        return $this->type;
    }


}