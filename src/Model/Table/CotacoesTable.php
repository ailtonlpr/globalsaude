<?php
namespace App\Model\Table;

use App\Controller\FuncoesController;
use App\Model\Entity\Cotaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CotacoesTable extends Table
{

    /* Definindo regras de inicialização */
    public function initialize(array $config)
    {

        parent::initialize($config);

        $this->setTable('S_COTACOES');
        $this->setDisplayField('S_COTACAO_I_ID');
        $this->setPrimaryKey('S_COTACAO_I_ID');
        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'S_COTACAO_D_DATAINCLUSAO' => 'new',
                    'S_COTACAO_D_DATAALTERACAO' => 'always'
                ]
            ]
        ]);

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
        $validator
            ->integer('S_COTACAO_I_ID')
            ->allowEmpty('S_COTACAO_I_ID', 'create');

        $validator
            ->scalar('S_COTACAO_S_NOME')
            ->maxLength('S_COTACAO_S_NOME', 255)
            ->requirePresence('S_COTACAO_S_NOME', 'create','Insira o nome')
            ->notEmpty('S_COTACAO_S_NOME','Insira o nome');

        $validator
            ->scalar('S_COTACAO_S_EMAIL')
            ->maxLength('S_COTACAO_S_EMAIL', 255)
            ->requirePresence('S_COTACAO_S_EMAIL', 'create','Insira o e-mail')
            ->notEmpty('S_COTACAO_S_EMAIL','Insira o e-mail')
            ->add('S_COTACAO_S_EMAIL', 'email', [
                'rule' => 'email',
                'message' => __('O sistema não reconhece o e-mail') 
            ]);


        $validator
            ->requirePresence('S_COTACAO_I_NUMEROS', 'create','Insira pelo menos um número de telefone')
            ->notEmpty('S_COTACAO_I_NUMEROS','Insira pelo menos um número de telefone')
            ;

        $validator
            ->integer('S_COTACAO_I_NUMERO_MOVEL')
            ->allowEmpty('S_COTACAO_I_NUMERO_MOVEL')
            ->add('S_COTACAO_I_NUMERO_MOVEL', 'custommovel', [
                'rule' => function ($valorCampo, $dadosForm) {
                    if(!FuncoesController::validarNumeroMobile($valorCampo))
                        return false;

                    return true;
                },  
                'message' => 'O número do telefone móvel é inválido'
            ]);

        $validator
            ->integer('S_COTACAO_I_NUMERO_FIXO')
            ->allowEmpty('S_COTACAO_I_NUMERO_FIXO','Insira o número do telefoene fixo')
            ->add('S_COTACAO_I_NUMERO_FIXO', 'custommovel', [
                'rule' => function ($valorCampo, $dadosForm) {
                    if(!FuncoesController::validarNumeroFixo($valorCampo))
                        return false;

                    return true;
                },  
                'message' => 'O número do telefone fixo é inválido'
            ]);

        $validator
            ->scalar('S_COTACAO_C_HORARIO_CONTATO')
            ->maxLength('S_COTACAO_C_HORARIO_CONTATO', 5)
            // ->requirePresence('S_COTACAO_C_HORARIO_CONTATO', 'create')
            ->allowEmpty('S_COTACAO_C_HORARIO_CONTATO');

        $validator
            ->scalar('S_COTACAO_S_OBSERVACAO')
            //->requirePresence('S_COTACAO_S_OBSERVACAO', 'create')
            ->allowEmpty('S_COTACAO_S_OBSERVACAO');

        $validator
            ->dateTime('S_COTACAO_D_DATAINCLUSAO');
            //->requirePresence('S_COTACAO_D_DATAINCLUSAO', 'create')
            //->notEmpty('S_COTACAO_D_DATAINCLUSAO');

        $validator
            ->dateTime('S_COTACAO_D_DATAALTERACAO');
            //->requirePresence('S_COTACAO_D_DATAALTERACAO', 'create')
            //->notEmpty('S_COTACAO_D_DATAALTERACAO');

        $validator
            ->integer('S_COTACAO_I_ATIVO');
            // ->requirePresence('S_COTACAO_I_ATIVO', 'create')
            // ->notEmpty('S_COTACAO_I_ATIVO');

        return $validator;
    }
}