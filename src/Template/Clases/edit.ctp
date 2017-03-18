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
                ['action' => 'delete', $clase->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clase->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clases form large-9 medium-8 columns content">
    <?= $this->Form->create($clase) ?>
    <fieldset>
        <legend><?= __('Edit Clase') ?></legend>
        <?php
            echo $this->Form->input('tema');
            echo $this->Form->input('horario');
            echo $this->Form->input('costo');
            echo $this->Form->input('estado');
            echo $this->Form->input('miembros._ids', ['options' => $miembros]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
