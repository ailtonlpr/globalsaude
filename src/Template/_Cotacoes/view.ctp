<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cotaco $cotaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cotaco'), ['action' => 'edit', $cotaco->S_COTACAO_I_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cotaco'), ['action' => 'delete', $cotaco->S_COTACAO_I_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $cotaco->S_COTACAO_I_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Cotacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cotaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cotacoes view large-9 medium-8 columns content">
    <h3><?= h($cotaco->S_COTACAO_I_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('S COTACAO S NOME') ?></th>
            <td><?= h($cotaco->S_COTACAO_S_NOME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S COTACAO S EMAIL') ?></th>
            <td><?= h($cotaco->S_COTACAO_S_EMAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S COTACAO C HORARIO CONTATO') ?></th>
            <td><?= h($cotaco->S_COTACAO_C_HORARIO_CONTATO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S COTACAO I ID') ?></th>
            <td><?= $this->Number->format($cotaco->S_COTACAO_I_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S COTACAO I NUMERO MOVEL') ?></th>
            <td><?= $this->Number->format($cotaco->S_COTACAO_I_NUMERO_MOVEL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S COTACAO I NUMERO FIXO') ?></th>
            <td><?= $this->Number->format($cotaco->S_COTACAO_I_NUMERO_FIXO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S COTACAO I ATIVO') ?></th>
            <td><?= $this->Number->format($cotaco->S_COTACAO_I_ATIVO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S COTACAO D DATAINCLUSAO') ?></th>
            <td><?= h($cotaco->S_COTACAO_D_DATAINCLUSAO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S COTACAO D DATAALTERACAO') ?></th>
            <td><?= h($cotaco->S_COTACAO_D_DATAALTERACAO) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('S COTACAO S OBSERVACAO') ?></h4>
        <?= $this->Text->autoParagraph(h($cotaco->S_COTACAO_S_OBSERVACAO)); ?>
    </div>
</div>
