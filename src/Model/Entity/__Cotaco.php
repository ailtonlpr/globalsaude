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
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'S_COTACAO_S_NOME' => true,
        'S_COTACAO_S_EMAIL' => true,
        'S_COTACAO_I_NUMERO_MOVEL' => true,
        'S_COTACAO_I_NUMERO_FIXO' => true,
        'S_COTACAO_C_HORARIO_CONTATO' => true,
        'S_COTACAO_S_OBSERVACAO' => true,
        'S_COTACAO_D_DATAINCLUSAO' => true,
        'S_COTACAO_D_DATAALTERACAO' => true,
        'S_COTACAO_I_ATIVO' => true
    ];
}
