<?php

class CustomerIsGoldTest extends  \PHPUnit\Framework\TestCase {
    function test_a_customer_is_gold_if_they_have_the_respective_type(){

        $spec = new CustomerIsGold();

       $goldCustomer = new Customer('gold');
       $silverCustomer = new Customer('silver');

       $this->assertTrue($spec->isSatisfiedBy($goldCustomer));

       $this->assertFalse($spec->isSatisfiedBy($silverCustomer));
    }
}