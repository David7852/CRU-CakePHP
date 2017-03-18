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
                ['action' => 'delete', $proyecto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proyecto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Proyectos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['controller' => 'Solicitudes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitud'), ['controller' => 'Solicitudes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proyectos form large-9 medium-8 columns content">
    <?= $this->Form->create($proyecto) ?>
    <fieldset>
        <legend><?= __('Edit Proyecto') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
