<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/27/2018
 * Time: 9:10 PM
 */
require ('vendor/autoload.php');

use Acme\Book;
use Acme\BookInterface;


class Person
{
    public function read(BookInterface $book) {
        $book->open();
        $book->turnPage();
    }
}

(new Person())->read(new Book());