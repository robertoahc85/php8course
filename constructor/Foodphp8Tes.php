<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use  Foodphp8;

class Foodphp8Tes extends TestCase
{
 
    public function testWithoutNamedArguments()
    {
        $Foodphp8 = new Foodphp8("Johnys PHP 8 Foodphp8",
                             "brioche",
                             "chilli",                             
                             "iceberg",
                             "beef",
                             ["jalapeno"]);
         $this->assertInstanceOf(Foodphp8::class, $Foodphp8);
         $this->assertEquals($Foodphp8->salad, "iceberg");
         $this->assertEquals($Foodphp8->meatType, "beef");
    }     
    

    public function testNamedArguments()
    {
        $Foodphp8 = new Foodphp8(name: "Johnys PHP 8 Foodphp8",
                             patty: "brioche",
                             sauce: "chilli",
                             meatType: "beef",
                             salad: "iceberg",
                             additions: ["jalapeno"]);
         $this->assertInstanceOf(Foodphp8::class, $Foodphp8);
         $this->assertEquals($Foodphp8->salad, "iceberg");
         $this->assertEquals($Foodphp8->meatType, "beef");
         

    }

  
    public function testNamedArgumentsMixed()
    {
        $Foodphp8 = new Foodphp8(name: "Johnys PHP 8 Foodphp8",                             
                             sauce: "chilli",
                             meatType: "beef",
                             salad: "iceberg",
                             patty: "brioche",
                             additions: ["jalapeno"]
                            );
        $this->assertInstanceOf(Foodphp8::class, $Foodphp8);
        $this->assertEquals($Foodphp8->meatType, "beef");

    }
    
    public function testNamedArgumentsMixedMissing()
    {
        $Foodphp8 = new Foodphp8(name: "Johnys PHP 8 Foodphp8",                             
                             sauce: "chilli",
                             //meatType: "beef",
                             salad: "ruccola",
                             patty: "brioche",
                             //additions: ["jalapeno"]
                            );
        $this->assertInstanceOf(Foodphp8::class, $Foodphp8);
        $this->assertEquals($Foodphp8->sauce, "chilli");
        $this->assertEquals($Foodphp8->meatType, "beef");
    }



}
