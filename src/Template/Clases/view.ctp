<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Clase'), ['action' => 'edit', $clase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clase'), ['action' => 'delete', $clase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clases view large-9 medium-8 columns content">
    <h3><?= h($clase->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tema') ?></th>
            <td><?= h($clase->tema) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horario') ?></th>
            <td><?= h($clase->horario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($clase->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clase->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Costo') ?></th>
            <td><?= $this->Number->format($clase->costo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Miembros') ?></h4>
        <?php if (!empty($clase->miembros)): ?>
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
            <?php foreach ($clase->miembros as $miembros): ?>
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
