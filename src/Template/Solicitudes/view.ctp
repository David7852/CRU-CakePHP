<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Solicitud'), ['action' => 'edit', $solicitud->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Solicitud'), ['action' => 'delete', $solicitud->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitud->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitud'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Componentes'), ['controller' => 'Componentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Componente'), ['controller' => 'Componentes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="solicitudes view large-9 medium-8 columns content">
    <h3><?= h($solicitud->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proyecto') ?></th>
            <td><?= $solicitud->has('proyecto') ? $this->Html->link($solicitud->proyecto->id, ['controller' => 'Proyectos', 'action' => 'view', $solicitud->proyecto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Miembro') ?></th>
            <td><?= $solicitud->has('miembro') ? $this->Html->link($solicitud->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $solicitud->miembro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Componente') ?></th>
            <td><?= $solicitud->has('componente') ? $this->Html->link($solicitud->componente->id, ['controller' => 'Componentes', 'action' => 'view', $solicitud->componente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($solicitud->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($solicitud->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Solicitud') ?></th>
            <td><?= h($solicitud->fecha_solicitud) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivo') ?></h4>
        <?= $this->Text->autoParagraph(h($solicitud->motivo)); ?>
    </div>
</div>
