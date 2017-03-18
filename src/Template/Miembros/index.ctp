<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contactos'), ['controller' => 'Contactos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contactos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Abonos'), ['controller' => 'Abonos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Abono'), ['controller' => 'Abonos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['controller' => 'Solicitudes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitud'), ['controller' => 'Solicitudes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utilerias'), ['controller' => 'Utilerias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utileria'), ['controller' => 'Utilerias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funciones'), ['controller' => 'Funciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcion'), ['controller' => 'Funciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clases'), ['controller' => 'Clases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Clase'), ['controller' => 'Clases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordinaciones'), ['controller' => 'Coordinaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordinacion'), ['controller' => 'Coordinaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="miembros index large-9 medium-8 columns content">
    <h3><?= __('Miembros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_de_usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clave') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_de_registro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contacto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($miembros as $miembro): ?>
            <tr>
                <td><?= $this->Number->format($miembro->id) ?></td>
                <td><?= h($miembro->nombre_de_usuario) ?></td>
                <td><?= h($miembro->clave) ?></td>
                <td><?= h($miembro->foto) ?></td>
                <td><?= h($miembro->correo) ?></td>
                <td><?= h($miembro->fecha_de_registro) ?></td>
                <td><?= h($miembro->estado) ?></td>
                <td><?= $miembro->has('contacto') ? $this->Html->link($miembro->contacto->id, ['controller' => 'Contactos', 'action' => 'view', $miembro->contacto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $miembro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $miembro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $miembro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembro->id)]) ?>
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
