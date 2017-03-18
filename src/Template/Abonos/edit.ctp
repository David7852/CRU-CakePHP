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
                ['action' => 'delete', $abono->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $abono->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Abonos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Balances'), ['controller' => 'Balances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Balance'), ['controller' => 'Balances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mensualidades'), ['controller' => 'Mensualidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mensualidad'), ['controller' => 'Mensualidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="abonos form large-9 medium-8 columns content">
    <?= $this->Form->create($abono) ?>
    <fieldset>
        <legend><?= __('Edit Abono') ?></legend>
        <?php
            echo $this->Form->input('monto_abonado');
            echo $this->Form->input('miembro_id', ['options' => $miembros, 'empty' => true]);
            echo $this->Form->input('balance_id', ['options' => $balances, 'empty' => true]);
            echo $this->Form->input('mensualidad_id', ['options' => $mensualidades, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
