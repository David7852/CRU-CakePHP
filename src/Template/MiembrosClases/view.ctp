<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Miembros Clase'), ['action' => 'edit', $miembrosClase->miembro_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Miembros Clase'), ['action' => 'delete', $miembrosClase->miembro_id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosClase->miembro_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Miembros Clases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembros Clase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clases'), ['controller' => 'Clases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clase'), ['controller' => 'Clases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="miembrosClases view large-9 medium-8 columns content">
    <h3><?= h($miembrosClase->miembro_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Miembro') ?></th>
            <td><?= $miembrosClase->has('miembro') ? $this->Html->link($miembrosClase->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $miembrosClase->miembro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clase') ?></th>
            <td><?= $miembrosClase->has('clase') ? $this->Html->link($miembrosClase->clase->id, ['controller' => 'Clases', 'action' => 'view', $miembrosClase->clase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= h($miembrosClase->rol) ?></td>
        </tr>
    </table>
</div>
