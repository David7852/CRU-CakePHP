<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solicitud->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solicitud->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Componentes'), ['controller' => 'Componentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Componente'), ['controller' => 'Componentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solicitudes form large-9 medium-8 columns content">
    <?= $this->Form->create($solicitud) ?>
    <fieldset>
        <legend><?= __('Edit Solicitud') ?></legend>
        <?php
            echo $this->Form->input('motivo');
            echo $this->Form->input('fecha_solicitud', ['empty' => true]);
            echo $this->Form->input('proyecto_id', ['options' => $proyectos]);
            echo $this->Form->input('miembro_id', ['options' => $miembros, 'empty' => true]);
            echo $this->Form->input('componente_id', ['options' => $componentes]);
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
