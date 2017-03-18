<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Miembros Coordinacione'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordinaciones'), ['controller' => 'Coordinaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordinacion'), ['controller' => 'Coordinaciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="miembrosCoordinaciones index large-9 medium-8 columns content">
    <h3><?= __('Miembros Coordinaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('miembro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coordinacion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($miembrosCoordinaciones as $miembrosCoordinacione): ?>
            <tr>
                <td><?= $miembrosCoordinacione->has('miembro') ? $this->Html->link($miembrosCoordinacione->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $miembrosCoordinacione->miembro->id]) : '' ?></td>
                <td><?= $miembrosCoordinacione->has('coordinacion') ? $this->Html->link($miembrosCoordinacione->coordinacion->id, ['controller' => 'Coordinaciones', 'action' => 'view', $miembrosCoordinacione->coordinacion->id]) : '' ?></td>
                <td><?= h($miembrosCoordinacione->rol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $miembrosCoordinacione->miembro_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $miembrosCoordinacione->miembro_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $miembrosCoordinacione->miembro_id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosCoordinacione->miembro_id)]) ?>
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
