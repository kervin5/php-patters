<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 3/4/2018
 * Time: 2:56 PM
 */

class CustomersRepository
{
    protected $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function bySpecification($specification){

        $matches = [];
        foreach ($this->customers as $customer){
            if($specification->isSatisfiedBy($customer)){
                $matches[] = $customer;
            }

        }

        return $matches;
    }

    public function all(){
        return $this->customers;
    }
}