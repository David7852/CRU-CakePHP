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
                ['action' => 'delete', $donacion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donacion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Donaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contactos'), ['controller' => 'Contactos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contactos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="donaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($donacion) ?>
    <fieldset>
        <legend><?= __('Edit Donacion') ?></legend>
        <?php
            echo $this->Form->input('monto');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('motivo');
            echo $this->Form->input('institucion_id', ['options' => $contactos, 'empty' => true]);
            echo $this->Form->input('fecha_de_realizacion', ['empty' => true]);
            echo $this->Form->input('referente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
