<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cotaco $cotaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cotaco->S_COTACAO_I_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cotaco->S_COTACAO_I_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cotacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cotacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($cotaco) ?>
    <fieldset>
        <legend><?= __('Edit Cotaco') ?></legend>
        <?php
            echo $this->Form->control('S_COTACAO_S_NOME');
            echo $this->Form->control('S_COTACAO_S_EMAIL');
            echo $this->Form->control('S_COTACAO_I_NUMERO_MOVEL');
            echo $this->Form->control('S_COTACAO_I_NUMERO_FIXO');
            echo $this->Form->control('S_COTACAO_C_HORARIO_CONTATO');
            echo $this->Form->control('S_COTACAO_S_OBSERVACAO');
            echo $this->Form->control('S_COTACAO_D_DATAINCLUSAO');
            echo $this->Form->control('S_COTACAO_D_DATAALTERACAO');
            echo $this->Form->control('S_COTACAO_I_ATIVO');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
