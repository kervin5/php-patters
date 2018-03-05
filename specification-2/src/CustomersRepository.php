<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 3/4/2018
 * Time: 2:56 PM
 */

class CustomersRepository
{
    public function whoMatch($specification){
        $customers = Customer::query();

        $customers = $specification->asScope($customers);

        return $customers->get();
    }

    public function all(){
        return Customer::all();
    }
}