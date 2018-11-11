<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;

/**
 * Cotacoes behavior
 */
class CotacoesBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        //debug($entity); die;
    }

}
