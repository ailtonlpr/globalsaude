
<?php
// foreach ($dados as $k => $d) {
//     debug($d['DADOS']);
//     die;
// }
?>
<div class="cotacoes index large-9 medium-8 columns content">
    <h3><?= __('Lista de Cotações') ?></h3>
    <table cellpadding="0" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID','ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CRIADO','CRIADO') ?></th>
                <th scope="col"><?= 'DADOS' ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $k => $d): ?>
            <tr>
                <td><?= $d['ID'] ?></td>
                <td><?= $d['CRIADO'] ?></td>
                <td><?= print_r($d['DADOS']) ?></td>
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
