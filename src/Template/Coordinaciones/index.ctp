<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coordinacion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funciones'), ['controller' => 'Funciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcion'), ['controller' => 'Funciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coordinaciones index large-9 medium-8 columns content">
    <h3><?= __('Coordinaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coordinaciones as $coordinacion): ?>
            <tr>
                <td><?= $this->Number->format($coordinacion->id) ?></td>
                <td><?= h($coordinacion->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coordinacion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordinacion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coordinacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinacion->id)]) ?>
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
