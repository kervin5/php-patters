<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 3/4/2018
 * Time: 1:48 PM
 */

class CustomerIsGold {
    public function isSatisfiedBy(Customer $customer){
        return $customer->type() == 'gold';
    }

    public function asScope($query){
        return $query->where('type','gold');
    }
}