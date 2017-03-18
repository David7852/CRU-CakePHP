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
                ['action' => 'delete', $mensualidad->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mensualidad->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mensualidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Abonos'), ['controller' => 'Abonos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Abono'), ['controller' => 'Abonos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mensualidades form large-9 medium-8 columns content">
    <?= $this->Form->create($mensualidad) ?>
    <fieldset>
        <legend><?= __('Edit Mensualidad') ?></legend>
        <?php
            echo $this->Form->input('concepto');
            echo $this->Form->input('monto_mensual');
            echo $this->Form->input('deducion');
            echo $this->Form->input('impuesto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
