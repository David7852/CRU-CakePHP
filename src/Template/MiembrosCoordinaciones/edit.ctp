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
                ['action' => 'delete', $miembrosCoordinacione->miembro_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosCoordinacione->miembro_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Miembros Coordinaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordinaciones'), ['controller' => 'Coordinaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordinacion'), ['controller' => 'Coordinaciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="miembrosCoordinaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($miembrosCoordinacione) ?>
    <fieldset>
        <legend><?= __('Edit Miembros Coordinacione') ?></legend>
        <?php
            echo $this->Form->input('rol');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
