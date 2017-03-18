<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Utileria'), ['action' => 'edit', $utileria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Utileria'), ['action' => 'delete', $utileria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utileria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Utilerias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utileria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="utilerias view large-9 medium-8 columns content">
    <h3><?= h($utileria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Evento') ?></th>
            <td><?= $utileria->has('evento') ? $this->Html->link($utileria->evento->id, ['controller' => 'Eventos', 'action' => 'view', $utileria->evento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($utileria->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Miembro') ?></th>
            <td><?= $utileria->has('miembro') ? $this->Html->link($utileria->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $utileria->miembro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($utileria->id) ?></td>
        </tr>
    </table>
</div>
