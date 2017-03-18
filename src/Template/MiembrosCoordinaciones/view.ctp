<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Miembros Coordinacione'), ['action' => 'edit', $miembrosCoordinacione->miembro_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Miembros Coordinacione'), ['action' => 'delete', $miembrosCoordinacione->miembro_id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosCoordinacione->miembro_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Miembros Coordinaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembros Coordinacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordinaciones'), ['controller' => 'Coordinaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordinacion'), ['controller' => 'Coordinaciones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="miembrosCoordinaciones view large-9 medium-8 columns content">
    <h3><?= h($miembrosCoordinacione->miembro_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Miembro') ?></th>
            <td><?= $miembrosCoordinacione->has('miembro') ? $this->Html->link($miembrosCoordinacione->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $miembrosCoordinacione->miembro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coordinacion') ?></th>
            <td><?= $miembrosCoordinacione->has('coordinacion') ? $this->Html->link($miembrosCoordinacione->coordinacion->id, ['controller' => 'Coordinaciones', 'action' => 'view', $miembrosCoordinacione->coordinacion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= h($miembrosCoordinacione->rol) ?></td>
        </tr>
    </table>
</div>
