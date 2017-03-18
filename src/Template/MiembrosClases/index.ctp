<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Miembros Clase'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clases'), ['controller' => 'Clases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Clase'), ['controller' => 'Clases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="miembrosClases index large-9 medium-8 columns content">
    <h3><?= __('Miembros Clases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('miembro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($miembrosClases as $miembrosClase): ?>
            <tr>
                <td><?= $miembrosClase->has('miembro') ? $this->Html->link($miembrosClase->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $miembrosClase->miembro->id]) : '' ?></td>
                <td><?= $miembrosClase->has('clase') ? $this->Html->link($miembrosClase->clase->id, ['controller' => 'Clases', 'action' => 'view', $miembrosClase->clase->id]) : '' ?></td>
                <td><?= h($miembrosClase->rol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $miembrosClase->miembro_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $miembrosClase->miembro_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $miembrosClase->miembro_id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosClase->miembro_id)]) ?>
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
