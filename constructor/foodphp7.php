<?php
namespace foodphp7;

class FoodPhp7 {
    
    /** Propiedas */
    public string $tamales;
    public string $enchiladas;
    public string $tostadas;
    public string $tacos;
  
    
public function __construct(
    string $tamales,
    string $enchiladas,
    string $tostadas,
    string $tacos,    /** Parametros */
) {
    $this->tamales = $tamales;
    $this->enchiladas = $enchiladas;
    $this->tostadas = $tostadas;
    $this->tacos = $tacos;/** Asignar valor de cada parametro a una propiedad */

}

}
