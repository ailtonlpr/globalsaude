<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Paginas helper
 */
class PaginasFuncoesHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];


    public function mensErroValidate($data)
    {
    	$tag = '';
    	if(count($data) > 1)  	{
    	 	$tag .= "<div class='validation' style='display:block'>";
    	 	foreach ($data as $mens) 
	    	{
	    		$tag .= $mens."<br /";
	    	}
    	 	$tag .= "</div>";
    	} else {
	    	foreach ($data as $mens) 
	    	{
	    		$tag .= "<div class='validation' style='display:block'>".$mens."</div>";
	    	}
    	}
     	return $tag;                                
    }

    public function mascaraFoneMovel($data){

        return (!empty($data)) ? '('.substr($data,0,2).') '.substr($data,2,5).'-'.substr($data, 7,4) : '';
    }

    public function mascaraFoneFixo($data){

        return (!empty($data)) ? '('.substr($data,0,2).') '.substr($data,2,4).'-'.substr($data, 6,4) : '';
    }

    public function getStatusRegistro($dados)
    {
        return ($dados == 1) ? 'Ativo' : 'Inativo';
    }

}