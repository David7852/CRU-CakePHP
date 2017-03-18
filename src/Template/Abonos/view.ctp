<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Abono'), ['action' => 'edit', $abono->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Abono'), ['action' => 'delete', $abono->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abono->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Abonos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Abono'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Balances'), ['controller' => 'Balances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balance'), ['controller' => 'Balances', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mensualidades'), ['controller' => 'Mensualidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mensualidad'), ['controller' => 'Mensualidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="abonos view large-9 medium-8 columns content">
    <h3><?= h($abono->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Miembro') ?></th>
            <td><?= $abono->has('miembro') ? $this->Html->link($abono->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $abono->miembro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Balance') ?></th>
            <td><?= $abono->has('balance') ? $this->Html->link($abono->balance->id, ['controller' => 'Balances', 'action' => 'view', $abono->balance->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mensualidad') ?></th>
            <td><?= $abono->has('mensualidad') ? $this->Html->link($abono->mensualidad->id, ['controller' => 'Mensualidades', 'action' => 'view', $abono->mensualidad->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($abono->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monto Abonado') ?></th>
            <td><?= $this->Number->format($abono->monto_abonado) ?></td>
        </tr>
    </table>
</div>
