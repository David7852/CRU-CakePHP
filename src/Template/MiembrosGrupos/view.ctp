<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Miembros Grupo'), ['action' => 'edit', $miembrosGrupo->miembro_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Miembros Grupo'), ['action' => 'delete', $miembrosGrupo->miembro_id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosGrupo->miembro_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Miembros Grupos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembros Grupo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="miembrosGrupos view large-9 medium-8 columns content">
    <h3><?= h($miembrosGrupo->miembro_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Miembro') ?></th>
            <td><?= $miembrosGrupo->has('miembro') ? $this->Html->link($miembrosGrupo->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $miembrosGrupo->miembro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $miembrosGrupo->has('grupo') ? $this->Html->link($miembrosGrupo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $miembrosGrupo->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= h($miembrosGrupo->rol) ?></td>
        </tr>
    </table>
</div>
