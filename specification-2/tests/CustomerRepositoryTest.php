<?php

use Illuminate\Database\Capsule\Manager as Database;

class CustomerRepositoryTest extends \PHPUnit\Framework\TestCase {
    protected $customers;

    function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {

        $this->setUpDatabase();


        $this->migrateTables();

        $this->customers = new CustomersRepository();
    }

    protected function setUpDatabase(){
        $database = new Database();

        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);

        $database->bootEloquent();
        $database->setAsGlobal();
    }

    protected function migrateTables(){
        Database::schema()->create('customers',function ($table){
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Customer::create(['name'=>'Joe','type'=>'gold']);
        Customer::create(['name'=>'Joe','type'=>'silver']);


    }

    function test_it_fetches_all_customers(){
        $results = $this->customers->all();
        $this->assertCount(2,$results);
    }

    function test_it_fetches_all_customers_who_match_a_given_specification(){

        $results = $this->customers->whoMatch(new CustomerIsGold);

        $this->assertCount(1,$results);
    }
}