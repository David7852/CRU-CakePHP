<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Componentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Modelos'), ['controller' => 'Modelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modelo'), ['controller' => 'Modelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['controller' => 'Solicitudes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitud'), ['controller' => 'Solicitudes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="componentes form large-9 medium-8 columns content">
    <?= $this->Form->create($componente) ?>
    <fieldset>
        <legend><?= __('Add Componente') ?></legend>
        <?php
            echo $this->Form->input('modelo_id', ['options' => $modelos, 'empty' => true]);
            echo $this->Form->input('observacion');
            echo $this->Form->input('dato');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
