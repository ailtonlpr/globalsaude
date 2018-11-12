<?php
namespace App\Model\Table;

use App\Controller\FuncoesController;
use App\Model\Entity\Cotaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class OutrosTable extends Table
{

    /* Definindo regras de inicialização */
    public function initialize(array $config)
    {

        parent::initialize($config);

        $this->setTable('S_OUTROS');
        $this->setDisplayField('S_OUTRO_I_ID');
        $this->setPrimaryKey('S_OUTRO_I_ID');
        // $this->addBehavior('Timestamp', [
        //     'events' => [
        //         'Model.beforeSave' => [
        //             'S_COTACAO_D_DATAINCLUSAO' => 'new',
        //             'S_COTACAO_D_DATAALTERACAO' => 'always'
        //         ]
        //     ]
        // ]);

        //$this->addBehavior('Cotacoes');
	    //$this->addBehavior('Logs');

        /*
        $this->belongsTo('Grupos', [
            'foreignKey' => 'S_GRUPOS_S_GRUPO_I_ID',
            'joinType'   => 'INNER'
        ]);
        $this->hasMany('Onlines', [
            'foreignKey' => 'S_USUARIOS_S_USUARIO_I_ID',
            'joinType'   => 'INNER'
        ]);
        */
    }

    public function beforeSave($event, $entity){
        /*
        die('beforeSave');
        if(isset($entity->S_COTACAO_I_NUMERO_MOVEL)) {
             $entity->S_COTACAO_I_NUMERO_MOVEL = preg_replace('/[^[:alnum:]_]/', '',$entity->S_COTACAO_I_NUMERO_MOVEL);
        }
        if(isset($entity->S_COTACAO_I_NUMERO_FIXO)) {
             $entity->S_COTACAO_I_NUMERO_FIXO = preg_replace('/[^[:alnum:]_]/', '',$entity->S_COTACAO_I_NUMERO_FIXO);
        }
        */
    }

    
    public function buildRules(RulesChecker $rules) {
        //$rules->add($rules->isUnique(['S_COTACAO_S_NOME','S_COTACAO_S_EMAIL'], __('Você já efetuo o contato.')));
        //$rules->add($rules->isUnique(['S_COTACAO_S_EMAIL'], __('Alguém já escolheu esse e-mail. Tente outro')));

        return $rules;
    }

    

    public function validationDefault(Validator $validator)
    {
        
        return $validator;
    }
}