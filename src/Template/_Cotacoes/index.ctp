<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cotaco[]|\Cake\Collection\CollectionInterface $cotacoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cotaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cotacoes index large-9 medium-8 columns content">
    <h3><?= __('Cotacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_I_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_S_NOME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_S_EMAIL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_I_NUMERO_MOVEL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_I_NUMERO_FIXO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_C_HORARIO_CONTATO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_D_DATAINCLUSAO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_D_DATAALTERACAO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_I_ATIVO') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cotacoes as $cotaco): ?>
            <tr>
                <td><?= $this->Number->format($cotaco->S_COTACAO_I_ID) ?></td>
                <td><?= h($cotaco->S_COTACAO_S_NOME) ?></td>
                <td><?= h($cotaco->S_COTACAO_S_EMAIL) ?></td>
                <td><?= $this->Number->format($cotaco->S_COTACAO_I_NUMERO_MOVEL) ?></td>
                <td><?= $this->Number->format($cotaco->S_COTACAO_I_NUMERO_FIXO) ?></td>
                <td><?= h($cotaco->S_COTACAO_C_HORARIO_CONTATO) ?></td>
                <td><?= h($cotaco->S_COTACAO_D_DATAINCLUSAO) ?></td>
                <td><?= h($cotaco->S_COTACAO_D_DATAALTERACAO) ?></td>
                <td><?= $this->Number->format($cotaco->S_COTACAO_I_ATIVO) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cotaco->S_COTACAO_I_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cotaco->S_COTACAO_I_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cotaco->S_COTACAO_I_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $cotaco->S_COTACAO_I_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
