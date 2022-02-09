<?php declare(strict_types=1);
use Foodphp7;



class Foodphp7Test extends TestCase
{

    /**
     * Named Arguments to call the constructor method 
     */
    public function testNamedArguments()
    {
        $burger = new Foodphp7("Johnys PHP 8 Burger",
                                 "brioche",
                                 "chilli",                                 
                                 "ruccola",
                                 "beef",
                                ["jalapeno"]);
       $this->assertInstanceOf(Foodphp7::class, $burger);


    }

   



}

 