<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Modelos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Componentes'), ['controller' => 'Componentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Componente'), ['controller' => 'Componentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modelos form large-9 medium-8 columns content">
    <?= $this->Form->create($modelo) ?>
    <fieldset>
        <legend><?= __('Add Modelo') ?></legend>
        <?php
            echo $this->Form->input('tipo');
            echo $this->Form->input('modelo');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('abstracto');
            echo $this->Form->input('documentacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
