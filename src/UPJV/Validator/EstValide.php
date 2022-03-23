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
*Construction parametre
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
