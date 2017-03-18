<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Funciones Miembro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funciones'), ['controller' => 'Funciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcion'), ['controller' => 'Funciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionesMiembros index large-9 medium-8 columns content">
    <h3><?= __('Funciones Miembros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('funcion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('miembro_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionesMiembros as $funcionesMiembro): ?>
            <tr>
                <td><?= $funcionesMiembro->has('funcion') ? $this->Html->link($funcionesMiembro->funcion->id, ['controller' => 'Funciones', 'action' => 'view', $funcionesMiembro->funcion->id]) : '' ?></td>
                <td><?= $funcionesMiembro->has('miembro') ? $this->Html->link($funcionesMiembro->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $funcionesMiembro->miembro->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $funcionesMiembro->funcion_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionesMiembro->funcion_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionesMiembro->funcion_id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionesMiembro->funcion_id)]) ?>
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
