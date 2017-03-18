<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Abono'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Balances'), ['controller' => 'Balances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Balance'), ['controller' => 'Balances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mensualidades'), ['controller' => 'Mensualidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mensualidad'), ['controller' => 'Mensualidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="abonos index large-9 medium-8 columns content">
    <h3><?= __('Abonos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto_abonado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('miembro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('balance_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mensualidad_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($abonos as $abono): ?>
            <tr>
                <td><?= $this->Number->format($abono->id) ?></td>
                <td><?= $this->Number->format($abono->monto_abonado) ?></td>
                <td><?= $abono->has('miembro') ? $this->Html->link($abono->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $abono->miembro->id]) : '' ?></td>
                <td><?= $abono->has('balance') ? $this->Html->link($abono->balance->id, ['controller' => 'Balances', 'action' => 'view', $abono->balance->id]) : '' ?></td>
                <td><?= $abono->has('mensualidad') ? $this->Html->link($abono->mensualidad->id, ['controller' => 'Mensualidades', 'action' => 'view', $abono->mensualidad->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $abono->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $abono->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $abono->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abono->id)]) ?>
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
