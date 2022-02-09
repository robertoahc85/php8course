<?php


class Foodphp8{
        
/**
 * Example Using Constructor Property Promotion
 * and Named Arguments
 */
public function __construct(
    public string $name,
    public string $patty,
    public string $sauce,   
    public string $salad,
    public string $meatType = "beef", 
    private array $additions = []
) {

   
}

}


