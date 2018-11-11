<?php
namespace App\Controller;

use Cake\Core\App;
use Cake\Database\FunctionsBuilder;
use Cake\Event\Event;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
use Cake\I18n\Date;
use Cake\I18n\Time;
use Cake\Network\Exception\NotFoundException;
use Cake\Network\Request;
use Cake\Network\Session;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;
use Cake\Validation\Validator;

class FuncoesController extends AppController
{

    public function initialize(){
        parent::initialize();              
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function beforeRender(Event $event) {
        parent::beforeRender($event);
    }

    static function limpandoMascaraInteiro($valor = null){
      return preg_replace("/[^0-9]/", "", $valor);
    }

    /**
     * Limpando máscara do telefone
     * 
     * @param string $fone
     *
     * @return String $fone                           
     */
    static function limpandoMascaraTelefone($fone = null){
      return str_replace(['(',')','-','_',' '], '', $fone);
    }

    static function validarNumeroMobile($valor = null){
        $valor = FuncoesController::limpandoMascaraTelefone($valor);
        $r = preg_match('/(^[1-9]{2}[^0-8]{1}[0-9]{8}$)/', $valor);
        return ($r) ? true : false;
    }

    static function validarNumeroFixo($valor = null){
        $valor = FuncoesController::limpandoMascaraTelefone($valor);
        $r = preg_match('/(^[1-9]{2}[^0,1,9]{1}[0-9]{7}$)/', $valor);
        return ($r) ? true : false;
    }

    

    static function acentosCkeditor($texto = null){
      return trim(html_entity_decode($texto, ENT_COMPAT, "UTF-8"));
    }

    static function getTempoVida($dt_nascimento = null){
      
      if(is_null($dt_nascimento)){
        return false;
      } 

      $dt_nascimento = $dt_nascimento->format('Y-m-d');

      $agora = date('Y-m-d');
      $data_atual    = new \DateTime($agora);
      $data_anterior = new \DateTime($dt_nascimento);
      $calculo       = $data_atual->diff($data_anterior);

      return "{$calculo->y} ".__('anos').", {$calculo->m} ".__('meses')." ".__('e')." {$calculo->d} ".__('dias')."";
    }

    static function mascara($valor, $mascara) {
        if(empty($valor)){
          $mascarado = '---';
          return $mascarado;
        } else {
            $mascarado = '';
            $j = 0;
            $valor = (string) $valor;
            for($i = 0; $i<= strlen($mascara)-1; $i++){
                if($mascara[$i] == '#'){
                  if(isset($valor[$j]))
                    $mascarado .= $valor[$j++];
                } else {
                  if(isset($mascara[$i]))
                    $mascarado .= $mascara[$i];
                }
            }
            return $mascarado;
        }
    }
}