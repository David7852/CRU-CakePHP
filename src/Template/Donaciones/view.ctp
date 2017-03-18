<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Donacion'), ['action' => 'edit', $donacion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Donacion'), ['action' => 'delete', $donacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donacion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Donaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Donacion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contactos'), ['controller' => 'Contactos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contactos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="donaciones view large-9 medium-8 columns content">
    <h3><?= h($donacion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contacto') ?></th>
            <td><?= $donacion->has('contacto') ? $this->Html->link($donacion->contacto->id, ['controller' => 'Contactos', 'action' => 'view', $donacion->contacto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($donacion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monto') ?></th>
            <td><?= $this->Number->format($donacion->monto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referente') ?></th>
            <td><?= $this->Number->format($donacion->referente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha De Realizacion') ?></th>
            <td><?= h($donacion->fecha_de_realizacion) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($donacion->descripcion)); ?>
    </div>
    <div class="row">
        <h4><?= __('Motivo') ?></h4>
        <?= $this->Text->autoParagraph(h($donacion->motivo)); ?>
    </div>
</div>
