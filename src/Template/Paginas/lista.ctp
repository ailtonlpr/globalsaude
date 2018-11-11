
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cotaco[]|\Cake\Collection\CollectionInterface $cotacoes
 */
?>
<div class="cotacoes index large-9 medium-8 columns content">
    <h3><?= __('Lista de Cotações') ?></h3>
    <table cellpadding="0" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_I_ID','ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_S_NOME','NOME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_S_EMAIL','E-MAIL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_I_NUMERO_MOVEL','CELULAR') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_I_NUMERO_FIXO','FIXO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_C_HORARIO_CONTATO','Horário Contato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_D_DATAINCLUSAO','Data Inclusão') ?></th>
                <th scope="col"><?= $this->Paginator->sort('S_COTACAO_I_ATIVO','Status') ?></th>
                <!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cotacoes as $cotaco): ?>
            <tr>
                <td><?= $this->Number->format($cotaco->S_COTACAO_I_ID) ?></td>
                <td><?= h($cotaco->S_COTACAO_S_NOME) ?></td>
                <td><?= h($cotaco->S_COTACAO_S_EMAIL) ?></td>
                <td><?= $this->PaginasFuncoes->mascaraFoneMovel($cotaco->S_COTACAO_I_NUMERO_MOVEL) ?></td>
                <td><?= $this->PaginasFuncoes->mascaraFoneFixo($cotaco->S_COTACAO_I_NUMERO_FIXO) ?></td>
                <td><?= h($cotaco->S_COTACAO_C_HORARIO_CONTATO) ?></td>
                <td><?= h($cotaco->S_COTACAO_D_DATAINCLUSAO->format('d/m/Y H:i:s')) ?></td>
                <td><?= $this->Number->format($cotaco->S_COTACAO_I_ATIVO) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
