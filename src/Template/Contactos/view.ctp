<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contacto'), ['action' => 'edit', $contacto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contacto'), ['action' => 'delete', $contacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contactos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactos view large-9 medium-8 columns content">
    <h3><?= h($contacto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($contacto->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ubicacion') ?></th>
            <td><?= h($contacto->ubicacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($contacto->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rif') ?></th>
            <td><?= h($contacto->rif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contacto->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Miembros') ?></h4>
        <?php if (!empty($contacto->miembros)): ?>
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
            <?php foreach ($contacto->miembros as $miembros): ?>
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
