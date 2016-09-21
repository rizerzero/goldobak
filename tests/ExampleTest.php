<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laracasts\Integrated\Extensions\Goutte as IntegrationTest;

class ExampleTest extends IntegrationTest
{
        use WithoutMiddleware;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {   
        $prepend='http://127.0.0.1/goldobak/public/'; 
        $this->visit($prepend)
             ->see('GOLDORAK');
    }
}
