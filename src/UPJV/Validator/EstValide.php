<?php

/**
*Salut
*/

namespace UPJV\Validator;

class EstValide implements ValidatorInterface 
/**
 * Validite interface
 */
{
    public function build(array $param): object 
	/**
	*construction parametre
	*/
    {
        return $this;
    }

    public function check($input): bool 
	
	/**
	*Verification
	*/
	
    {
        return true;
    }
}
