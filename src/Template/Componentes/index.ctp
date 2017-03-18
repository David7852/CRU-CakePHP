<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Componente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modelos'), ['controller' => 'Modelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modelo'), ['controller' => 'Modelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['controller' => 'Solicitudes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitud'), ['controller' => 'Solicitudes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="componentes index large-9 medium-8 columns content">
    <h3><?= __('Componentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dato') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($componentes as $componente): ?>
            <tr>
                <td><?= $this->Number->format($componente->id) ?></td>
                <td><?= $componente->has('modelo') ? $this->Html->link($componente->modelo->id, ['controller' => 'Modelos', 'action' => 'view', $componente->modelo->id]) : '' ?></td>
                <td><?= h($componente->observacion) ?></td>
                <td><?= h($componente->dato) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $componente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $componente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $componente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $componente->id)]) ?>
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
