<?php

/**
*Salut
*/

namespace UPJV\Validator;

/**
 * Validite interface
 */
 
class EstValide implements ValidatorInterface 

{
    /**
     * Récupère la taille minimum spécifier dans la conf
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object 	
    {
        return $this;
    }

/**
     * Test la longueur de la chaine de caractères
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool 
	
	
	
    {
        return true;
    }
}
