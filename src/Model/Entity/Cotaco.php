<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cotaco Entity
 *
 * @property int $S_COTACAO_I_ID
 * @property string $S_COTACAO_S_NOME
 * @property string $S_COTACAO_S_EMAIL
 * @property int $S_COTACAO_I_NUMERO_MOVEL
 * @property int $S_COTACAO_I_NUMERO_FIXO
 * @property string $S_COTACAO_C_HORARIO_CONTATO
 * @property string $S_COTACAO_S_OBSERVACAO
 * @property \Cake\I18n\FrozenTime $S_COTACAO_D_DATAINCLUSAO
 * @property \Cake\I18n\FrozenTime $S_COTACAO_D_DATAALTERACAO
 * @property int $S_COTACAO_I_ATIVO
 */
class Cotaco extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true
    ];

   /*
    protected function _setSCOTACAOINUMEROMOVEL($numero)
    {
        
        return preg_replace('/[^[:alnum:]_]/', '',$numero);
    }
    */

}