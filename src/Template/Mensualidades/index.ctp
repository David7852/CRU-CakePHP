<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mensualidad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Abonos'), ['controller' => 'Abonos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Abono'), ['controller' => 'Abonos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mensualidades index large-9 medium-8 columns content">
    <h3><?= __('Mensualidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('concepto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto_mensual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deducion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('impuesto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mensualidades as $mensualidad): ?>
            <tr>
                <td><?= $this->Number->format($mensualidad->id) ?></td>
                <td><?= h($mensualidad->concepto) ?></td>
                <td><?= $this->Number->format($mensualidad->monto_mensual) ?></td>
                <td><?= $this->Number->format($mensualidad->deducion) ?></td>
                <td><?= $this->Number->format($mensualidad->impuesto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mensualidad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mensualidad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mensualidad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mensualidad->id)]) ?>
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
