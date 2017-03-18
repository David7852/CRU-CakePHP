<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Solicitud'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Componentes'), ['controller' => 'Componentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Componente'), ['controller' => 'Componentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solicitudes index large-9 medium-8 columns content">
    <h3><?= __('Solicitudes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_solicitud') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proyecto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('miembro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('componente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitudes as $solicitud): ?>
            <tr>
                <td><?= $this->Number->format($solicitud->id) ?></td>
                <td><?= h($solicitud->fecha_solicitud) ?></td>
                <td><?= $solicitud->has('proyecto') ? $this->Html->link($solicitud->proyecto->id, ['controller' => 'Proyectos', 'action' => 'view', $solicitud->proyecto->id]) : '' ?></td>
                <td><?= $solicitud->has('miembro') ? $this->Html->link($solicitud->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $solicitud->miembro->id]) : '' ?></td>
                <td><?= $solicitud->has('componente') ? $this->Html->link($solicitud->componente->id, ['controller' => 'Componentes', 'action' => 'view', $solicitud->componente->id]) : '' ?></td>
                <td><?= h($solicitud->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $solicitud->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitud->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitud->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitud->id)]) ?>
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
