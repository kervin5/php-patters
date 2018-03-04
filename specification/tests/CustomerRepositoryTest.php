<?php

class CustomerRepositoryTest extends \PHPUnit\Framework\TestCase {
    protected $customers;

    function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->customers = new CustomersRepository([
            new Customer('gold'),
            new Customer('bronze'),
            new Customer('silver'),
            new Customer('gold')
        ]);
    }

    function test_it_fetches_all_customers(){
        $results = $this->customers->all();
        $this->assertCount(4,$results);
    }

    function test_it_fetches_all_customers_who_match_a_given_specification(){
        $customers = $this->customers;

        $spec = new CustomerIsGold();

        $results = $customers->bySpecification(new CustomerIsGold);

        $this->assertCount(2,$results);
    }
}