<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funciones Miembro'), ['action' => 'edit', $funcionesMiembro->funcion_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funciones Miembro'), ['action' => 'delete', $funcionesMiembro->funcion_id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionesMiembro->funcion_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funciones Miembros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funciones Miembro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funciones'), ['controller' => 'Funciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcion'), ['controller' => 'Funciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionesMiembros view large-9 medium-8 columns content">
    <h3><?= h($funcionesMiembro->funcion_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Funcion') ?></th>
            <td><?= $funcionesMiembro->has('funcion') ? $this->Html->link($funcionesMiembro->funcion->id, ['controller' => 'Funciones', 'action' => 'view', $funcionesMiembro->funcion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Miembro') ?></th>
            <td><?= $funcionesMiembro->has('miembro') ? $this->Html->link($funcionesMiembro->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $funcionesMiembro->miembro->id]) : '' ?></td>
        </tr>
    </table>
</div>
