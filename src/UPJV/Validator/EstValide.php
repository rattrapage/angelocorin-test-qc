<?php

/**
*Salut
*/

namespace UPJV\Validator;

 /**
     * Récupère la taille minimum spécifier dans la conf
     *
     * @param array $param
     *
     * @return object
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
*Verification
*/
    public function check($input): bool 
	
	
	
    {
        return true;
    }
}
