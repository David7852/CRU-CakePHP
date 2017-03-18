<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Utilerias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="utilerias form large-9 medium-8 columns content">
    <?= $this->Form->create($utileria) ?>
    <fieldset>
        <legend><?= __('Add Utileria') ?></legend>
        <?php
            echo $this->Form->input('evento_id', ['options' => $eventos, 'empty' => true]);
            echo $this->Form->input('estado');
            echo $this->Form->input('miembro_id', ['options' => $miembros, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
