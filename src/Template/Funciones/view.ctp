<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcion'), ['action' => 'edit', $funcion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcion'), ['action' => 'delete', $funcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordinaciones'), ['controller' => 'Coordinaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordinacion'), ['controller' => 'Coordinaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funciones view large-9 medium-8 columns content">
    <h3><?= h($funcion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($funcion->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coordinacion') ?></th>
            <td><?= $funcion->has('coordinacion') ? $this->Html->link($funcion->coordinacion->id, ['controller' => 'Coordinaciones', 'action' => 'view', $funcion->coordinacion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcion->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Miembros') ?></h4>
        <?php if (!empty($funcion->miembros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre De Usuario') ?></th>
                <th scope="col"><?= __('Clave') ?></th>
                <th scope="col"><?= __('Foto') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Fecha De Registro') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Contacto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($funcion->miembros as $miembros): ?>
            <tr>
                <td><?= h($miembros->id) ?></td>
                <td><?= h($miembros->nombre_de_usuario) ?></td>
                <td><?= h($miembros->clave) ?></td>
                <td><?= h($miembros->foto) ?></td>
                <td><?= h($miembros->correo) ?></td>
                <td><?= h($miembros->fecha_de_registro) ?></td>
                <td><?= h($miembros->estado) ?></td>
                <td><?= h($miembros->contacto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Miembros', 'action' => 'view', $miembros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Miembros', 'action' => 'edit', $miembros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Miembros', 'action' => 'delete', $miembros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
